<?php

namespace App\Http\Livewire;
use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;
class Members extends Component
{
   use WithPagination;
    public $Membes , $nama, $email, $phonnumber ,$status, $member_id;
    public $pag= 5;
    public $search;
    public $isModal;
    public function render()
    { 
        return view('livewire.members', [
            'Members' => $this->search === null ? 
            Member::orderby('created_at','DESC')->paginate($this->pag):
            Member::orderby('created_at','DESC')->where('name','like', '%' . $this->search . '%') ->paginate($this->pag)
        ]);
    }
    public function create(){
        $this->resetfields();
        $this->openModal();
    }
    public function resetfields(){
        $this->name='';
        $this->email='';
        $this->phonnumber='';
        $this->status='';
        $this->member_id='';
    }

    public function openModal()
    {
        $this->isModal=true;
    }
    public function closeModal()
    {
        $this->isModal=false;
    }

    public function store()
    {
        $this->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:members,email,'.$this->member_id,
            'phonnumber'=>'required|string',
            'status'=>'required'
        ]);
        Member::updateOrCreate(['id' => $this->member_id],
            [
                'name'=>$this->name,
                'email'=>$this->email,
                'phonnumber'=>$this->phonnumber,
                'status'=>$this->status
            ]
            );
        session()->flash('message', $this->member_id ? $this->name . 'diperbaharui': $this->name . 'ditambahkan');
        $this->closeModal();
        $this->resetfields();
    }
    public function edit($id)
    {
        $member=member::find($id);
        $this->member_id=$id;
        $this->name=$member->name;
        $this->email=$member->email;
        $this->phonnumber=$member->phonnumber;
        $this->status=$member->status;
        $this->openModal();
    }

   public function delete($id)
   {
        $member=member::find($id);
        $member->delete();
        session()->flash('message', $member->name. 'dihapus');
   }

}