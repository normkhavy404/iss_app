<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use Livewire\Component;
use App\Models\Role as RoleModel;

class Role extends Component
{

    public $pers = [];
    public $role_name = '', $role_id;

    public function render()
    {
        $permissions = Permission::all();

        $roles  = RoleModel::all();

        return view('livewire.role', compact('permissions','roles'));
    }

    public function save(){
        if($this->role_id){
            //edit
            $role = RoleModel::find($this->role_id);
            $role->title = $this->role_name;
            $role->save();
            $role->permissions()->sync($this->pers);
        }else {
            $role = new RoleModel();
            $role->title = $this->role_name;
            $role->save();
            $role->permissions()->attach($this->pers);
            $this->reset(['role_name', 'pers']);
        }
    }

    public function edit($id){
        $role = RoleModel::find($id);
        $this->pers = $role->permissions->pluck('id');
        $this->role_name = $role->title;
        $this->role_id = $role->id;
    }
}
