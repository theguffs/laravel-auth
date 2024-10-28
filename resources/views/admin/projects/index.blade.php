@extends("layouts.admin")
@section("content")
<h1>elenco progetti</h1>
<a href="{{ route("admin.projects.create")}}">+ nuovo progetto</a>
<ul>
    @foreach ($projects as $project)
    <li>
        <a href="{{ route("admin.projects.show", $project)}}">
            {{ $project->name}}
        </a>
        <a href="{{ route("admin.projects.edit", $project)}}">
             modifica
        </a>
        <form action="{{ route("admin.project.destroy", $project)}}" method="POST">
           <input type="text"> 
        </form>
    </li>
    @endforeach
</ul>
@endsection