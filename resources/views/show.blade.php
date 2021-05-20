@extends('layouts.app')
@section('content')
<div class="forma" style="width:50%; padding-left:200PX;" >
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2><b> TE DHENAT E PUNONJESIT</b></h2>
         </div>
      </div>
   </div>
   <div class="row">
      <table class="table table-bordered">
         <tbody>
            <tr>
               <th>EMRI</th>
               <td>{{ $punonjes->emer }}</td>
            </tr>
            <tr>
               <th>MBIEMRI</th>
               <td>{{ $punonjes->mbiemer }}</td>
            </tr>
            <tr>
               <th>POZICIONI</th>
               <td>{{ $punonjes->pozicioni }}</td>
            </tr>
            <tr>
               <th>PAGA PER ORE(LEK/ORE)</th>
               <td>{{number_format($punonjes->paga_ore)}}</td>
            </tr>
            <tr>
               <th>DATA E RREGJISTRIMIT</th>
               <td>{{ $punonjes->data_rregjister }}</td>
            </tr>
            <tr>
               <th>ORET E PUNES</th>
               <td> {{$day*8 }}</td>
            </tr>
            <tr>
               <th>PAGA(LEKE)</th>
               <td>{{number_format(($day*8)*$punonjes->paga_ore)}} </td>
            </tr>
         </tbody>
      </table>
      <!-- <a  href="" class="btn btn-danger" style="margin-left:15px;">FSHI</a> -->
      <form method="POST" action="{{route('destroy',$punonjes->id)}}">
         {{ csrf_field() }}
         {{ method_field('DELETE') }}
         <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Fshi Punonjes">
         </div>
      </form>
   </div>
</div>
@endsection