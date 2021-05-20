@extends('layouts.app')
@section('content')
<div class="container" style="margin-left:70px;">
@if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
   <div>
      <h3><b>SHTO PUNONJES</h3>
   </div>
   </BR>
   <form action="{{route('store')}}" method="POST">
      @csrf
      <div class="form-group row">
         <label for="inputName" class="col-sm-2 col-form-label">EMRI</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" name="emer" >
         </div>
      </div>
      <div class="form-group row">
         <label for="inputSurname" class="col-sm-2 col-form-label">MBIEMRI</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSurname" name="mbiemer">
         </div>
      </div>
      <div class="form-group row">
         <label for="inputName" class="col-sm-2 col-form-label">POZICIONI</label>
         <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="pozicioni">
               <option value="doktor">DOKTOR</option>
               <option value="infermier">INFERMIER</option>
               <option value="sanitare">SANITARE</option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label for="inputName" class="col-sm-2 col-form-label">PAGA PER ORE</BR>(LEK/ORE)</label>
         <div class="col-sm-10">
            <input type="name" class="form-control" id="inputName" name="paga_ore">
         </div>
      </div>
      <div class="form-group row">
         <label for="inputName" class="col-sm-2 col-form-label">DATA E</BR> RREGJISTRIMIT</label>
         <div class="col-sm-10">
            <input type="date"  class="form-control" id="inputName" name="data_rregjister" >
         </div>
      </div>
      <div class="form-group row">
         <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">RREGJISTRO</button>
         </div>
      </div>
   </form>
</div>
@endsection