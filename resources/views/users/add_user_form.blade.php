@extends('layouts.default')

@section('content')
<div class="container all-posts-body">
    <h3>Tambah <small class="text-muted">Pengguna </small></h3>
    <form>
        @csrf
        <div class="form-group">
            <label for="storeProfile">Toko</label>
            <select class="form-control" id="storeProfileId" name="storeProfileId">
            @foreach ($storeProfiles as $storeProfile)
                <option value={{ $storeProfile->Id }}>{{ $storeProfile->StoreName }}</option>                
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="userGroup">Kelompok Pengguna</label>
            <select class="form-control" id="userGroupId" name="userGroupId">
            @foreach ($userGroups as $userGroup)
                <option value={{ $userGroup->Id }}>{{ $userGroup->Description }}</option>                
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="userCode">Kode Pengguna</label>
            <input type="text" class="form-control" id="userCode" name="userCode" placeholder="Kode Pengguna">
        </div>
        <div class="form-group">
            <label for="userName">Nama Pengguna</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Nama Pengguna">
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
        </div>
        <div class="form-group">
            <label for="retypePassword">Ulang Kata Sandi</label>
            <input type="password" class="form-control" id="retypePassword" name="retypePassword" placeholder="Ulang Kata Sandi">
        </div>
        <div class="form-group form-check">
            <input type="hidden" name="active" value="Tidak Aktif">
            <input type="checkbox" class="form-check-input" c="active" name="active" value="Aktif">
            <label class="form-check-label" for="active">Aktif</label>
        </div>
        <button type="submit" class="btn btn-primary" id="add">Simpan</button> 
    </form>
</div>

<script>
         jQuery(document).ready(function(){
            jQuery('#add').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
              
                var _token = $("input[name=_token]").val();
                var storeProfileId = $("#storeProfileId option").val();
                var userGroupId = $("#userGroupId option").val();
                var userCode = $("input[name=userCode]").val();
                var userName = $("input[name=userName]").val();
                var password = $("input[name=password]").val();
                var active = $("input[name=active]").val();

                jQuery.ajax({
                    url: "{{ url('users/add') }}",
                    method: 'post',
                    dataType:'json',
                    data: {
                        _token: _token,
                        'storeProfileId':storeProfileId,
                        'userGroupId':userGroupId,
                        'userCode':userCode,
                        'userName':userName,
                        'password':password,
                        'active':active
                    },
                    success: function(data){
                        console.log(data);

                        jQuery('#userCode').val("");
                        jQuery('#userName').val("");
                        jQuery('#password').val("");
                        jQuery('#retypePassword').val("");
                    },
                    error: function(data){
                        console.log("fail");
                    }
                });
               });
            });
</script>

@endsection