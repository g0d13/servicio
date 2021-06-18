<x-app-layout>
    <x-slot name="header">
        Bitacoras
    </x-slot>
    <div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
        <div class="d-flex align-content-between align-items-center justify-content-between">
            <p class="text-muted mb-3 fs-4 fw-bold">Bitacoras</p>
            <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
        </div>
        <table class="table table-borderless align-middle">

            <thead class="border-top border-bottom">
                <th class="text-uppercase text-muted ">#</th>
                <th class="text-uppercase text-muted ">Nombre</th>
                <th class="text-uppercase text-muted ">Detalles</th>
                <th class="text-uppercase text-muted ">Mecanico encargado</th>
                <th class="text-uppercase text-muted ">Tipos</th>
                <th class="text-uppercase text-muted "></th>
            </thead>
            <tbody>
            <td>
                1
            </td>
            <td>
                Bitacora 1
            </td>
            <td>
                Detalles bitacora 2
            </td>
            <td>
                Mecanico
            </td>
            <td>
                Tipos
            </td>
            <td>
                Editar|Eliminar
            </td>
            </tbody>
        </table>
    </div>
</x-app-layout>
