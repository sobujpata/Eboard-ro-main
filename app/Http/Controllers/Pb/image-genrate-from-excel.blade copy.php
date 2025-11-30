Sub ExportImagesToWordTable()
    Dim ws As Worksheet
    Dim imgCell As Range
    Dim imgPath As String
    Dim wdApp As Object
    Dim wdDoc As Object
    Dim wdTable As Object
    Dim rowIndex As Long
    Dim colIndex As Long
    Dim pic As Object
    Dim totalImages As Long

    ' === Configuration ===
    Set ws = ThisWorkbook.Sheets("Worksheet") ' your sheet name
    Const ImageRange As String = "A2:A200" ' cells with image paths
    Const ImageWidth As Single = 60        ' pixels
    Const ImageHeight As Single = 75      ' pixels
    Const ColumnsPerRow As Integer = 1     ' how many images per row
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

    totalImages = ws.Range(ImageRange).Cells.Count
    Dim totalRows As Long
    totalRows = Application.Ceiling(totalImages / ColumnsPerRow, 1)

    ' Create Word table
    Set wdTable = wdDoc.Tables.Add(wdDoc.Range, totalRows, ColumnsPerRow)
    wdTable.Borders.Enable = True

    rowIndex = 1
    colIndex = 1

    ' Loop through Excel image paths
    For Each imgCell In ws.Range(ImageRange)
        imgPath = "D:\Laravel project\eboard_ro\public\promotionBoard\image\" & imgCell.Value & ".gif"
        If Len(Dir(imgPath)) > 0 Then
            ' Insert image in Word table cell
            wdTable.Cell(rowIndex, colIndex).Range.InlineShapes.AddPicture _
                FileName:=imgPath, LinkToFile:=False, SaveWithDocument:=True

            ' Resize image
            With wdTable.Cell(rowIndex, colIndex).Range.InlineShapes(1)
                .LockAspectRatio = False
                .Width = ImageWidth
                .Height = ImageHeight
            End With

            ' Move to next cell
            colIndex = colIndex + 1
            If colIndex > ColumnsPerRow Then
                colIndex = 1
                rowIndex = rowIndex + 1
            End If
        End If
    Next imgCell

    wdApp.Activate
    MsgBox "Images successfully exported to Word!", vbInformation
End Sub
