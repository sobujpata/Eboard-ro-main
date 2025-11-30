Sub ExportImageAndServiceNoToWord()
    Dim ws As Worksheet
    Dim imgCell As Range
    Dim imgPath As String
    Dim serviceNo As String
    Dim wdApp As Object
    Dim wdDoc As Object
    Dim wdTable As Object
    Dim rowIndex As Long
    Dim pic As Object

    ' === CONFIGURATION ===
    Set ws = ThisWorkbook.Sheets("Worksheet") ' your sheet name
    Const ImageCol As String = "A"         ' column with image path or file name
    Const ServiceCol As String = "A"       ' column with service numbers
    Const StartRow As Long = 2             ' first data row
    Const EndRow As Long = 200              ' last data row
    Const ImageWidth As Single = 60        ' pixels
    Const ImageHeight As Single = 75      ' pixels
    Const BaseFolder As String = "D:\Laravel project\eboard_ro\public\promotionBoard\image\" & imgCell.Value & ".gif" ' optional folder path
    ' ======================

    ' Start Word
    On Error Resume Next
    Set wdApp = GetObject(, "Word.Application")
    If wdApp Is Nothing Then
        Set wdApp = CreateObject("Word.Application")
    End If
    On Error GoTo 0

    wdApp.Visible = True
    Set wdDoc = wdApp.Documents.Add

    ' Create Word table (rows = number of images, columns = 2)
    Dim totalRows As Long
    totalRows = EndRow - StartRow + 1
    Set wdTable = wdDoc.Tables.Add(wdDoc.Range, totalRows, 2)
    wdTable.Borders.Enable = True
    wdTable.Columns(1).PreferredWidth = 100
    wdTable.Columns(2).PreferredWidth = 120

    rowIndex = 1

    ' Loop through Excel rows
    For Each imgCell In ws.Range(ImageCol & StartRow & ":" & ImageCol & EndRow)
        imgPath = imgCell.Value
        serviceNo = ws.Range(ServiceCol & imgCell.Row).Value

        ' Build full path if using a folder
        If InStr(imgPath, "\") = 0 Then
            imgPath = BaseFolder & imgPath
        End If

        ' Only insert if image exists
        If Len(Dir(imgPath)) > 0 Then
            ' Insert image into first column
            wdTable.Cell(rowIndex, 1).Range.InlineShapes.AddPicture _
                FileName:=imgPath, LinkToFile:=False, SaveWithDocument:=True

            With wdTable.Cell(rowIndex, 1).Range.InlineShapes(1)
                .LockAspectRatio = False
                .Width = ImageWidth
                .Height = ImageHeight
            End With
        Else
            wdTable.Cell(rowIndex, 1).Range.Text = "Image not found"
        End If

        ' Add service number to second column
        wdTable.Cell(rowIndex, 2).Range.Text = serviceNo

        rowIndex = rowIndex + 1
    Next imgCell

    wdApp.Activate
    MsgBox "✅ Export complete! Images and service numbers added to Word.", vbInformation
End Sub
