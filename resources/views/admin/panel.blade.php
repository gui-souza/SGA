@extends('layouts.master')

@section('title', 'SGA - Painel de Gerenciamento de ajustes e certificados')

@section('nav_title', 'Painel de gerenciamento de Ajustes e Certificados')


@section('content')

@include('partials.menu')
<div class="container" style="width: 500px">
	<table class="table">
	  <thead>
	    <tr class="border_bottom">
	      <th scope="col" class="blue" style="width: 250px">Requerimentos de ajuste</th>
	      <th scope="col">
      		<button class="btn btn-info"
      			onclick="window.location='{{ url("/admin/ajuste") }}'"><i class="fa fa-list"> Ver </i>
      		</button>
      		<button class="btn btn-info"
      			onclick="window.location='{{ url("/admin/ajuste/config") }}'"><i class="fa fa-cog"> Configurar </i>
      		</button>
	      </th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">Situação</th>
	      <td>{{$status}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Data de abertura</th>
	      <td>{{$config['abertura']}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Data de fechamento</th>
	      <td>{{$config['fechamento']}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Novos</th>
	      <td>{{$novos}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Deferidos</th>
	      <td>{{$deferidos}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Indeferidos</th>
	      <td>{{$indeferidos}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Pendentes</th>
	      <td>{{$pendentes}}</td>
	    </tr>
	  </tbody>
	</table>

	<table class="table">
	  <thead>
	    <tr class="border_bottom">
	      <th scope="col" class="blue" style="width: 250px">Eventos</th>
	      <th scope="col">
	  		<button class="btn btn-info"
	  			onclick="window.location='{{ url("/admin/eventos") }}'"><i class="fa fa-list"> Ver </i>
	  		</button>
	  		<button class="btn btn-info"
	  			onclick="window.location='{{ url("/admin/eventos/configurar") }}'"><i class="fa fa-cog"> Configurar </i>
	  		</button>
	      </th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">Certificados</th>
	      <td></td>
	    </tr>
	    <tr>
	      <th scope="row">Visualizados</th>
	      <td></td>
	    </tr>
	    <tr>
	      <th scope="row">Impressos</th>
	      <td></td>
	    </tr>
	  </tbody>
	</table>
</div>

@endsection