@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Disciplina
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($disciplina, ['route' => ['disciplinas.update', $disciplina->id], 'method' => 'patch']) !!}

                        @include('disciplinas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection