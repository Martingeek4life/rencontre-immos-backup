// Route::get('/', function () {
//     return view('immos.index');
// });

Route::get('/', 'houseController@index')->name('racine');
Route::get('/getville', 'houseController@loadVille');
Route::get('/search', 'houseController@search')->name('search');
Route::get('/search1', 'houseController@search1')->name('search1');
Route::get('/search1', 'houseController@search2')->name('search2');

Route::Post('/user-registration', 'userController@register')->name('registration');
Route::Post('/user-add-house', 'houseController@register')->name('addMaison');
Route::Post('/user-add-housev', 'houseController@registerv')->name('addMaisonv');
Route::match(['get', 'post'], '/user-add-terrain', 'houseController@registerTerrain')->name('addTerrain');
Route::match(['get', 'post'], '/user-add-terrainv', 'houseController@registerTerrainV')->name('addTerrainV');
Route::get('/user-login', 'userController@login')->name('login');
Route::get('mes-immobiliers','houseController@getMyImmo')->name('mes-immobiliers');
Route::post('update-validite','houseController@updateImmo')->name('update-validite');
Route::post('update-validiteT','houseController@updateImmoT')->name('update-validiteT');
Route::get('get-house-détails','houseController@getHouseDetails')->name('get-house-détails');

Route::get('house-détails/{id}','houseController@getByIdHouseDetails')->name('getById-house-détails');
Route::get('terre-détails/{id}','houseController@getByIdTerreDetails')->name('getById-terre-détails');

Route::post('get-terre-détails','houseController@getTerreDetails')->name('get-terre-détails');
Route::get('achat','houseController@getAllhouse')->name('vendre');
Route::get('location','houseController@getAllterres')->name('louer');
// Route::view('/login','adminLte.login');
Route::view('register','adminLte.register');
// Route::view('login-success','adminLte.dashboard');
Route::view('login-success','immos.buy');
/* Route::view('louer','immos.rent')->name('louer');; */

Route::view('forgot-password','adminLte.forgot-password');

Route::view('profile','adminLte.profile');

Route::view('personnel','adminLte.personnel');

Route::view('reservation','adminLte.reservation');

Route::view('chambre','adminLte.chambre');

