<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('login');});
Route::get('/', function () {return view('index');});
Route::get('/home', function () {return view('index');});
Route::get('/login', function () {return view('login');});
Route::get('/help', function () {return view('help');});
Route::get('/facultyMember', function () {return view('search/facultyMember');});
//Route::get('/reports', function () {return view('reports/index');});
Route::get('/facLogin', function () {return view('users/adminIndex');});
Route::get('/deanIn', function () {return view('users/deanIndex');});
Route::get('/coIn', function () {return view('users/coIndex');});
Route::get('/credPage', function () {return view('users/credentialPage');});
Route::get('/credManPage', function () {return view('users/credentialManPage');});
Route::get('/addCred', function () {return view('users/addCredPage');});
Route::get('/instCredPage', function () {return view('users/instructorCredPage');});
Route::get('/coinstCredPage', function () {return view('users/coinstructorCredPage');});
Route::get('/confirmInstructor', function () {return view('users/confirmInstructor');});
Route::get('/confirmDept', function () {return view('users/confirmDept');});
Route::get('/credRemoveConfirm', function () {return view('users/credRemoveConfirm');});
Route::get('/credAddConfirm', function () {return view('users/credAddConfirm');});
    Route::get('/credit/{id}', 'UserController@credit');
    Route::put('/credManPage/{id}', 'UserController@deleteCredit');
Route::get('/credAud', function () {return view('users/credAud');});
    Route::get('/credAccounting', function () {return view('users/credAccounting');});
    Route::get('/credAppal', function () {return view('users/credAppal');});
    Route::get('/credBio', function () {return view('users/credBio');});
    Route::get('/credCouns', function () {return view('users/credCouns');});
    Route::put('/credAppal/{id}', 'UserController@changeCred');
    Route::get('/credAccountingDupl', function () {return view('users/credAccountingDupl');});
    Route::get('/coAccounting', function () {return view('users/coAccounting');});
    Route::get('/coAccountingDupl', function () {return view('users/coAccountingDupl');});
//Search
Route::get('/faculty', function () {return view('search/faculty');});
Route::get('/department', function () {return view('search/department');});
Route::get('/course', function () {return view('search/course');});
Route::get('/users/{id}', 'UserController@view');
Route::get('/deptView', 'MajorController@view');
Route::get('/courseView', 'CourseController@view');
Route::get('/academicA', function () {return view('search/depAcaAf');});
Route::get('/account', function () {return view('search/depAccount');});
Route::get('/appStudies', function () {return view('search/depAppStu');});
Route::get('/bio', function () {return view('search/depBio');});
Route::get('/couns', function () {return view('search/depCouns');});
Route::get('/biol5597', function () {return view('search/BIOL');});
Route::get('/math5327', function () {return view('search/MATH');});
Route::get('/soci5900', function () {return view('search/SOCI');});
Route::get('/cuai5426', function () {return view('search/CUAI');});
Route::get('/psci3350', function () {return view('search/PSCI');});
Route::get('/eced4018', function () {return view('search/ECED');});

//Reports
Route::get('/facultyRoster', function () {return view('reports/facultyRoster');});
Route::get('/gaRoster', function () {return view('reports/gaRoster');});
Route::get('/facultyCred', function () {return view('reports/facultyCred');});
Route::get('/courseSecQual', function () {return view('reports/courseSecQual');});

//Misc Reports
Route::get('/etsuMission', function () {return view('reports/etsuMission');});
Route::get('/tcs', function () {return view('reports/tcs');});
Route::get('/sacs', function () {return view('reports/sacs');});
Route::get('/guidelines', function () {return view('reports/guidelines');});
Route::get('/instructionChair', function () {return view('reports/instructionChair');});


// Users
Route::get('/users', 'UserController@index');
Route::get('/users/delete/{id}', 'UserController@delete');
Route::post('/users', 'UserController@add');
Route::get('/users/edit/{id}', 'UserController@edit');
/*Route::put('/users/{id}', 'UserController@update');
Route::get('/users/{id}', 'UserController@profile');*/

// Roles
Route::get('/roles', 'RoleController@index');
Route::get('/roles/delete/{id}', 'RoleController@delete');
Route::post('/roles', 'RoleController@add');
Route::get('/roles/edit/{id}', 'RoleController@edit');
Route::put('/roles/{id}', 'RoleController@update');

// Courses
Route::get('/courses', 'CourseController@index');
Route::get('/courses/delete/{id}', 'CourseController@delete');
Route::post('/courses', 'CourseController@add');
Route::get('/courses/edit/{id}', 'CourseController@edit');
Route::put('/courses/{id}', 'CourseController@update');
Route::get('/courses/{id}', 'CourseController@profile');

// Reports
Route::get('/reports', 'ReportsController@index');
Route::get('/reports/attended', 'ReportsController@attended');
Route::get('/reports/canTeach', 'ReportsController@canTeach');
Route::get('/reports/areTeaching', 'ReportsController@areTeaching');
Route::get('/reports/roleUsers', 'ReportsController@roleUsers');
Route::get('/reports/majorCourses', 'ReportsController@majorCourses');
Route::get('/reports/permissions', 'ReportsController@permissions');

// Login
Route::get('/login', 'Auth\LoginController@show');
Route::post('/login', 'Auth\LoginController@auth');
Route::get('/logout', 'Auth\LoginController@logout');

// Register
Route::get('/register', 'UserController@registerPage');
Route::post('/register', 'UserController@register');