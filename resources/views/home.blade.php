@extends('layouts.app')
@section('content')
<div class="container" style="margin-left:70px;">
   <div>
      <h3><b>SISTEMI I MENAXHIMIT</b></h3>
   </div>
   <div class="row">
      <div class="col-9">
         <a  href="{{route('create')}}" class="btn btn-primary">SHTO</a>
      </div>
      <div class="col-3" >
         <input type="date" class="date" id="dt" onchange="get(this);"></form>
      </div>
   </div>
   </br>
   <table class="table table-bordered">
      <thead>
         <tr>
            <th>EMER</th>
            <th>MBIEMER</th>
            <th>POZICION</th>
            <th>VEPRIME</th>
         </tr>
      </thead>
      <tbody>
         @if(!empty($punonjesit))
         @foreach($punonjesit as $key => $punonjes)
         <tr>
            <td>{{ $punonjes->emer }}</td>
            <td>{{ $punonjes->mbiemer }}</td>
            <td>{{ $punonjes->pozicioni }}</td>
            <td><a href="{{route('show',$punonjes->id)}}" >Show</a> </td>
         </tr>
         @endforeach
         @else
         <tr>
            <td colspan="10">There are no data.</td>
         </tr>
         @endif
      </tbody>
   </table>
   {{ $punonjesit->links() }}  
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
   function get(object) {
           var date = object.value;
           console.log(date);
           var d = new Date(object.value);
           console.log(d);
           var day = d.getDate()
           console.log(day);
           $.ajax({
                url: '/getdate',
                data: {'day': day},
                method:"POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                
                datatype: 'JSON',
                success: function (response) {
                    console.log(response);
                },
                error: function (response) {
   
                }
            });
       }
</script> 
@endsection