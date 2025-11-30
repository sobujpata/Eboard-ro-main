<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Pb\pbContrller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Pb\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Pb\allRecomSummary;
use App\Http\Controllers\Pb\ExportController;
use App\Http\Controllers\Pb\PbItemController;
use App\Http\Controllers\Pb\StanByController;
use App\Http\Controllers\Admin\MenuController;
// use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Pb\pbRecomController;
use App\Http\Controllers\Pb\SelectionController;
use App\Http\Controllers\pb\pbBaseWiseController;
use App\Http\Controllers\Admin\PersListController;
use App\Http\Controllers\Admin\PoliciesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\userListController;
use App\Http\Controllers\DatabaseBackupController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PbNextVacController;
use App\Http\Controllers\Admin\PbVacencyController;
use App\Http\Middleware\TokenVerificationMiddleware;
use App\Http\Controllers\Evaluation\EbPersController;
use App\Http\Controllers\Admin\PbPreviouseVacController;
use App\Http\Controllers\ConductSheetController;
use App\Http\Controllers\Evaluation\HomeController as EvaluationHomeController;
use App\Http\Controllers\InstractionController;
use App\Http\Controllers\Pb\PbContrller as PbPbContrller;
use App\Http\Controllers\RetdvacController;

// Web API Routes
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);
Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/user-profile', [UserController::class, 'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update', [UserController::class, 'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);


// User Logout
Route::get('/logout', [UserController::class, 'UserLogout']);

// Page Routes
// Route::get('/',[HomeController::class,'HomePage']);
Route::get('/', [UserController::class, 'LoginPage']);
Route::get('/userRegistration', [UserController::class, 'RegistrationPage']);
Route::get('/sendOtp', [UserController::class, 'SendOtpPage']);
Route::get('/verifyOtp', [UserController::class, 'VerifyOTPPage']);
Route::get('/resetPassword', [UserController::class, 'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile', [UserController::class, 'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);

//admin Route

Route::get('/dashboard', [DashboardController::class, 'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/summary', [DashboardController::class, 'Summary'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/users', [userListController::class, 'index'])->name('user.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/user/store', [userListController::class, 'store'])->name('user.store')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/user/edit/{id}', [userListController::class, 'edit'])->name('user.edit')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/user/delete/{id}', [userListController::class, 'destroy'])->name('user.delete')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/users-download', [userListController::class, 'exportUsers'])->name('user.export')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/policies', [PoliciesController::class, 'index'])->name('policy.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/create', [PoliciesController::class, 'create'])->name('policy.create')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/update/{id}', [PoliciesController::class, 'edit'])->name('policy.update')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/delete/{id}', [PoliciesController::class, 'destroy'])->name('policy.delete')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/pb/vac', [PbVacencyController::class, 'index'])->name('PbCurrentVac.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/CurrentVac/store', [PbVacencyController::class, 'store'])->name('PbCurrentVac.store')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/CurrentVac/edit/{id}', [PbVacencyController::class, 'edit'])->name('PbCurrentVac.edit')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/pb/CurrentVac/delete/{id}', [PbVacencyController::class, 'destroy'])->name('PbCurrentVac.delete')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/pb/PreviouseVac', [PbPreviouseVacController::class, 'index'])->name('PreviouseVac.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/PreviouseVac/store', [PbPreviouseVacController::class, 'store'])->name('PbPreviouseVac.store')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/PreviouseVac/edit/{id}', [PbPreviouseVacController::class, 'edit'])->name('PbPreviouseVac.edit')->middleware([TokenVerificationMiddleware::class]);
// Route::get('/admin/pb/PreviouseVac/delete/{id}', [PbPreviouseVacController::class, 'destroy'])->name('PbPreviouseVac.delete')->middleware([TokenVerificationMiddleware::class]);
Route::delete('/pb-previouse-vac/{id}', [PbPreviouseVacController::class, 'destroy'])->name('PbPreviouseVac.delete')->middleware([TokenVerificationMiddleware::class]);

Route::get('/admin/pb/PbNextVac', [PbNextVacController::class, 'index'])->name('PbNextVac.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/PbNextVac/store', [PbNextVacController::class, 'store'])->name('PbPbNextVac.store')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/PbNextVac/edit/{id}', [PbNextVacController::class, 'edit'])->name('PbPbNextVac.edit')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/pb/PbNextVac/delete/{id}', [PbNextVacController::class, 'destroy'])->name('PbNextVac.delete')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/pb/PersList', [PersListController::class, 'index'])->name('PersList.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/PersList/store', [PersListController::class, 'store'])->name('PbPersList.store')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/pb/PersList/edit/{id}', [PersListController::class, 'edit'])->name('PbPersList.edit')->middleware([TokenVerificationMiddleware::class]);
Route::delete('/admin/pb/PersList/delete/{id}', [PersListController::class, 'PersonDestroy'])->name('PersList.delete')->middleware([TokenVerificationMiddleware::class]);
Route::get('/admin/pb/nav-settings', [SettingsController::class, 'NavSettings'])->name('nav.settings')->middleware([TokenVerificationMiddleware::class]);
Route::post('/admin/nav/store', [SettingsController::class, 'NavEdit'])->name('nav.edit')->middleware([TokenVerificationMiddleware::class]);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('menus', \App\Http\Controllers\MenuController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('bases', \App\Http\Controllers\BaseController::class);
});

//Pb Route

Route::get('/pb/pb-home', [HomeController::class, 'pbHomePage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/pb-policy', [HomeController::class, 'policy'])->name('pb.home')->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/{trade}/{sheetNo}', [pbContrller::class, 'pbListShow'])->name('pb.index')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb/{id}', [pbContrller::class, 'updatermks'])->name('pb.update')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-pers-by-id', [pbContrller::class, 'pbPersById'])->name('pb.byId')->middleware([TokenVerificationMiddleware::class]);

Route::post('/pb-pers-edit', [pbContrller::class, 'edit'])->name('pb.edit')->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/recomList', [pbRecomController::class, 'index'])->name('pb.recommend')->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/recomList/{trade}/{rank}', [pbRecomController::class, 'index'])->name('recomPromotion.index')->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/summary', [pbRecomController::class, 'ChartSummary'])->name('pb.chartForSummary')->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/summary-demo', [allRecomSummary::class, 'index'])->name('pb.demoForSummary')->middleware([TokenVerificationMiddleware::class]);
Route::get('/pb/rank-wise-summary', [pbRecomController::class, 'ChartRankSummary'])->name('pb.ChartRankSummary')->middleware([TokenVerificationMiddleware::class]);

//Dynamic Summary
Route::get('/Summary-Dynamic', [PbPbContrller::class, 'SummaryDynamic'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/summery-dynamic-get', [PbPbContrller::class, 'SummaryDynamicPost'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/summery-dynamic-all', [PbPbContrller::class, 'AllSummaryDynamic'])->middleware([TokenVerificationMiddleware::class]);

Route::get('items/{id}/update-decision', [PbItemController::class, 'updateDecision'])->middleware([TokenVerificationMiddleware::class]);

//PB report route
Route::get('/Export/{trade}', [ExportController::class, 'pbRcomExportList'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/selection', [SelectionController::class, 'SelectedList'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/stanby', [StanByController::class, 'StanBy'])->middleware([TokenVerificationMiddleware::class]);

//Image Upload
Route::get('/pb-image', [PbItemController::class, 'ImagePage'])->name('ImagePage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-image-upload', [PbItemController::class, 'ImageUpload'])->name('ImageUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-image', [PbItemController::class, 'DeleteImage'])->middleware([TokenVerificationMiddleware::class]);
//Profile Upload
Route::get('/pb-Profile', [PbItemController::class, 'ProfilePage'])->name('ProfilePage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-profile-upload', [PbItemController::class, 'ProfileUpload'])->name('profileUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-profile', [PbItemController::class, 'DeleteProfile'])->middleware([TokenVerificationMiddleware::class]);

//Conduct sheet Upload
Route::get('/pb-conduct-sheet', [PbItemController::class, 'ConductSheetPage'])->name('ConductSheetPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-conduct-sheet-upload', [PbItemController::class, 'ConductSheetUpload'])->name('ConductSheetUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-conduct-sheet', [PbItemController::class, 'DeleteConductSheet'])->middleware([TokenVerificationMiddleware::class]);

//Application upload
Route::get('/pb-application', [PbItemController::class, 'ApplicationPage'])->name('applicationPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-application-upload', [PbItemController::class, 'ApplicationUpload'])->name('applicationUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-application', [PbItemController::class, 'DeleteApplication'])->middleware([TokenVerificationMiddleware::class]);

//Salient Point
Route::get('/pb-salient', [PbItemController::class, 'salientPage'])->name('salientPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-salient-upload', [PbItemController::class, 'salientUpload'])->name('salientUpload')->middleware([TokenVerificationMiddleware::class]);

//Add new pb person
Route::get('/pb-add-new-person', [PbItemController::class, 'CreatePerson'])->name('CreatePerson')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-store-person', [PbItemController::class, 'Store'])->name('store')->middleware([TokenVerificationMiddleware::class]);
//Add new pb person
Route::get('/pb-person-upload-ecxel', [PbItemController::class, 'UploadExcelPage'])->name('UploadExcelPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/pb-upload-excel', [PbItemController::class, 'UploadExcel'])->name('store')->middleware([TokenVerificationMiddleware::class]);
//Add Coduct sheet
Route::get('/pb-conduct-sheet-upload-ecxel', [ConductSheetController::class, 'index'])->name('UploadExcelPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/conduct-sheet-upload-excel', [ConductSheetController::class, 'UploadExcel'])->name('store')->middleware([TokenVerificationMiddleware::class]);

//Coduct sheet
Route::get('/conduct-sheet',[ConductSheetController::class, 'conductSheet'])->name('conductSheet.all')->middleware([TokenVerificationMiddleware::class]);
Route::get('/conduct-sheet-delete/{id}',[ConductSheetController::class, 'destroy'])->name('conductSheet.destroy')->middleware([TokenVerificationMiddleware::class]);
Route::post('/conduct-sheet-by-id', [ConductSheetController::class, 'showById'])->name('conductSheet.id')->middleware([TokenVerificationMiddleware::class]);
Route::post('/conduct-sheet-create',[ConductSheetController::class, 'create'])->name('conductSheet.create')->middleware([TokenVerificationMiddleware::class]);
Route::post('/conduct-sheet-update',[ConductSheetController::class, 'update'])->name('conductSheet.update')->middleware([TokenVerificationMiddleware::class]);
Route::post('/conduct-sheet-by-person',[ConductSheetController::class, 'personByConductsheet'])->name('conductSheet.byPerson')->middleware([TokenVerificationMiddleware::class]);

//All Bdno
Route::get('/pb-bdno', [PbItemController::class, 'PbBdno'])->name('bdno.show')->middleware([TokenVerificationMiddleware::class]);

// Pb Base wise Route
Route::get('/pb-home-base', [pbBaseWiseController::class, 'index'])->name('pb.baseWise')->middleware([TokenVerificationMiddleware::class]);
Route::get('/basewise/pb-base/{trade}/{sheetNo}', [pbBaseWiseController::class, 'PbPers'])->name('pb.baseWise')->middleware([TokenVerificationMiddleware::class]);

//Booklet Download
Route::get('/booklets', [PdfController::class, 'index'])->middleware([TokenVerificationMiddleware::class]);


Route::post('/booklets-download', [PdfController::class, 'BookleteDownload'])->name('booklets.download')->middleware([TokenVerificationMiddleware::class]);
Route::post('/recommendation-booklets-download', [PdfController::class, 'RecomBookleteDownload'])->name('recomBooklets.download')->middleware([TokenVerificationMiddleware::class]);
// Image URL for MS Word
Route::get('/image-url-generator', [ExportController::class, 'urlGenerator'])
    ->middleware([TokenVerificationMiddleware::class]);

Route::get('/image-url-download', [ExportController::class, 'urlDownload'])
    ->name('imageUrl.download') // ✅ fixed name
    ->middleware([TokenVerificationMiddleware::class]);


Route::get('/instraction', [InstractionController::class, 'index'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/instraction/update', [InstractionController::class, 'update'])->name('instraction.update')->middleware([TokenVerificationMiddleware::class]);

//trade list
Route::get('/trades', [RetdvacController::class, 'trade'])->middleware(TokenVerificationMiddleware::class);
//Vac create on retairment
Route::get('/vac-on-retd', [RetdvacController::class, 'index'])->middleware(TokenVerificationMiddleware::class);
//api
Route::get('/vac-on-retd-list', [RetdvacController::class, 'show'])->middleware(TokenVerificationMiddleware::class);
Route::post('/vac-on-retd-create', [RetdvacController::class, 'create'])->middleware(TokenVerificationMiddleware::class);
Route::post('/vac-on-retd-by-id', [RetdvacController::class, 'showById'])->middleware(TokenVerificationMiddleware::class);
Route::post('/vac-on-retd-update/{id}', [RetdvacController::class, 'update'])->middleware(TokenVerificationMiddleware::class);
Route::post('/vac-on-retd-delete', [RetdvacController::class, 'destroy'])->middleware(TokenVerificationMiddleware::class);

Route::get('/pdf', [PdfController::class, 'generate'])->middleware([TokenVerificationMiddleware::class]);

//Evaluation Board Route
Route::get('/eb-home', [EvaluationHomeController::class, 'index'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb/{type}', [EbPersController::class, 'index'])->name('eb.list')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-update/{id}', [EbPersController::class, 'update'])->name('eb.update')->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb/items/{id}/update-decision', [EbPersController::class, 'updateDecision'])->name('eb.decision')->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-selection', [EbPersController::class, 'EbSelectedList'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-stanby', [EbPersController::class, 'EbStandByList'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-all-pers', [EbPersController::class, 'EbList'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-pers-pdf-download', [EbPersController::class, 'EbPersByPdf'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-all-pers-pdf', [EbPersController::class, 'EbListPdf'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-edit-pers/{id}', [EbPersController::class, 'PersUpdate'])->name('eb.edit')->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-pers-delete/{id}', [EbPersController::class, 'EbDelete'])->name('eb.delete')->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-summary', [EbPersController::class, 'Summary'])->name('eb.summary')->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-summary-person/{category}', [EbPersController::class, 'fetchPersonsByType'])->name('fetchPersonsByType')->middleware([TokenVerificationMiddleware::class]);
//Image Upload
Route::get('/eb-image', [EbPersController::class, 'ImagePage'])->name('ImagePage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-image-upload', [EbPersController::class, 'ImageUpload'])->name('ImageUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-image', [EbPersController::class, 'DeleteImage'])->middleware([TokenVerificationMiddleware::class]);
//Profile Upload
Route::get('/eb-Profile', [EbPersController::class, 'ProfilePage'])->name('ProfilePage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-profile-upload', [EbPersController::class, 'ProfileUpload'])->name('profileUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-profile', [EbPersController::class, 'DeleteProfile'])->middleware([TokenVerificationMiddleware::class]);

//Conduct sheet Upload
Route::get('/eb-conduct-sheet', [EbPersController::class, 'ConductSheetPage'])->name('ConductSheetPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-conduct-sheet-upload', [EbPersController::class, 'ConductSheetUpload'])->name('ConductSheetUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-conduct-sheet', [EbPersController::class, 'DeleteConductSheet'])->middleware([TokenVerificationMiddleware::class]);

//Application upload
Route::get('/eb-application', [EbPersController::class, 'ApplicationPage'])->name('applicationPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-application-upload', [EbPersController::class, 'ApplicationUpload'])->name('applicationUpload')->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-all-application', [EbPersController::class, 'DeleteApplication'])->middleware([TokenVerificationMiddleware::class]);

//Salient Point
Route::get('/eb-salient', [EbPersController::class, 'salientPage'])->name('salientPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-pers-for-saliant-point-by-bdno', [EbPersController::class, 'ebPersByBdnoForSalientPoint'])->name('ebPersByBdnoForSalientPoint')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-salient-upload', [EbPersController::class, 'salientUpload'])->name('salientUpload')->middleware([TokenVerificationMiddleware::class]);

//Add new eb person
Route::get('/eb-add-new-person', [EbPersController::class, 'CreatePerson'])->name('CreatePerson')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-store-person', [EbPersController::class, 'Store'])->name('store')->middleware([TokenVerificationMiddleware::class]);
//Add new eb person
Route::get('/eb-person-upload-ecxel', [EbPersController::class, 'UploadExcelPage'])->name('UploadExcelPage')->middleware([TokenVerificationMiddleware::class]);
Route::post('/eb-upload-excel', [EbPersController::class, 'UploadExcel'])->name('store')->middleware([TokenVerificationMiddleware::class]);
Route::get('/eb-bdno', [EbPersController::class, 'Bdno'])->name('bdno.show')->middleware([TokenVerificationMiddleware::class]);

Route::get('/download-backup', [DatabaseBackupController::class, 'download'])->name('backup.download')->middleware([TokenVerificationMiddleware::class]);
