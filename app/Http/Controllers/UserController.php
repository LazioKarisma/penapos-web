<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User as User;
use App\Models\StoreProfile as StoreProfile;
use App\Models\UserGroup as UserGroup;

class UserController extends Controller 
{

	public function index() 
	{
		$view = View('users.index');

		$view->users = User::GetAllData();

		$view->title = $this->generateTableId(CoreConstant::$USER_MDL);
		
		return $view;
	}
	
	public function showAddUserForm() 
	{
		$view = View('users.add_user_form');

		$view->storeProfiles = StoreProfile::GetStoreProfileForCombo();

		$view->userGroups = UserGroup::GetUserGroupForCombo();

		$view->title = "Tambah Pengguna";

		return $view;
	}

	public function doAddUser(Request $request) 
	{
		/*$validator = Validator::make($request->all(), [
            'userCode' => 'required|unique:user|max:255',
            'userName' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('users/add')
                        ->withErrors($validator)
                        ->withInput();
		}*/
		
		$user = new User();

		$user->Id = $this->generateTableId(CoreConstant::$USER_MDL);
		$user->StoreProfileId = $request->storeProfileId;
		$user->UserGroupId = $request->userGroupId;
		$user->UserCode = $request->userCode;
		$user->UserName = $request->userName;
		$user->Password = sha1($request->password);
		$user->Active = $request->active;
		$user->UserCreate = 'sysadmin';
		$user->CreationTime = date('Y-m-d H:i:s');
		$user->UserModified = 'sysadmin';
		$user->ModificationTime = date('Y-m-d H:i:s');
		$user->save();

    	return response()->json($user);
	}
}