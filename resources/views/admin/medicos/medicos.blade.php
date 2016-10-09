@extends('layouts.admin')

@section('titulo','Medicos')

@section('contenido')

<div id="page-title">
    <h2> <i class="glyph-icon icon-user-md"></i> Medicos</h2>
    <p>Directorio Medico.</p>
</div>

<div class="panel">
    <div class="panel-body">

      <h3 class="title-hero">
            Medicos
            <div class="pull-right">
                <div class="pull-right">
                    <button class="btn btn-alt btn-sm btn-hover btn-info"><span>Nuevo</span> <i class="glyph-icon icon-plus"></i></button>
                </div>
            </div>
          </h3>
        <div class="example-box-wrapper">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td>
                          <button class="btn btn-alt btn-hover btn-success"><span>Editar</span> <i class="glyph-icon icon-pencil"></i></button>
                          <button class="btn btn-alt btn-hover btn-danger"><span>Eliminar</span> <i class="glyph-icon icon-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="even gradeC">
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td>
                          <button class="btn btn-sm btn-success"><i class="glyph-icon icon-pencil"></i> <small>Editar</small> </button>
                          <button class="btn btn-sm btn-danger"><i class="glyph-icon icon-trash"></i> <small>Eliminar</small> </button>  
                        </td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td></td>
                    </tr>
                    <tr class="even gradeA">
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="center">7</td>
                        <td></td>
                    </tr>
                    <tr class="even gradeA">
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td class="center">6</td>
                        <td></td>
                    </tr>
                    <tr class="gradeA">
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.7</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td></td>
                    </tr>
                    <tr class="gradeA">
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td></td>
                    </tr>
                    <tr class="gradeA">
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="center">1.9</td>
                        <td></td>
                    </tr>
                    <tr class="gradeA">
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="center">1.8</td>
                        <td></td>
                    </tr>
                    <tr class="gradeA">
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="center">1.8</td>
                        <td></td>
                    </tr>
                    <tr class="gradeU">
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
