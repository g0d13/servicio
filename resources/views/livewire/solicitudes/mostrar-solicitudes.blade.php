<x-slot name="header">
    Solicitudes
</x-slot>
<div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
    <div class="d-flex align-content-between align-items-center justify-content-between">
        <p class="text-muted mb-3 fs-4 fw-bold">Solicitudes</p>
    </div>
    <table class="table table-borderless align-middle">
        <thead class="border-top border-bottom">
            <th class="text-uppercase text-muted ">#</th>
            <th class="text-uppercase text-muted ">Prioridad</th>
            <th class="text-uppercase text-muted ">Problema</th>
            <th class="text-uppercase text-muted ">Modulo</th>
            <th class="text-uppercase text-muted ">Supervisor</th>
            <th class="text-uppercase text-muted ">Maquina</th>
            <th class="text-uppercase text-muted ">Bitacora</th>
            <th class="text-uppercase text-muted "></th>
        </thead>
          @foreach ($solicitudes as $solicitud)
              <tr>
                  <td>{{ $solicitud->id }}</td>
                  <td>{{ $solicitud->prioridad }}</td>
                  <td>{{ $solicitud->problema->nombre }}</td>
                  <td>{{ $solicitud->modulo }}</td>
                  <td>{{ $solicitud->supervisor->nombre }} {{ $solicitud->supervisor->apellidos }}</td>
                  <td>Máquina {{ $solicitud->maquina->id }}</td>
                  <td>{{ $solicitud->bitacora->nombre }}</td>
                  <td>
                    {{-- Mostrar solo a los supervisores --}}
                   @if(auth()->user()->rol_id == 2)
                    <button class="btn" id="btnHoraLlegadaMecanico" data-solicitud="{{ $solicitud->id }}">
                        <i class="far fa-clock"></i>
                        </button>
                   @endif
                   @if (auth()->user()->rol_id == 3 && !$solicitud->reparacion)
                    <button class="btn" id="btnCrearReparacion" data-solicitud="{{ $solicitud->id }}">
                        <i class="fas fa-check"></i>
                    </button>
                   @endif
                </td>
              </tr>
          @endforeach
        </tbody>
    </table>
</div>

<script>
    if (document.getElementById('btnHoraLlegadaMecanico')) {
        document.getElementById('btnHoraLlegadaMecanico').onclick = () => {
        Swal.fire({
            title: '¿El mecánico ha llegado ya?',
            text: "Presione aceptar si el mecánico ya ha llegado",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#5cb85c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('horaLLegadaMecanico', document.getElementById('btnHoraLlegadaMecanico').getAttribute('data-solicitud'));
            }
        })
    }
    }

    if (document.getElementById('btnCrearReparacion')) {
        document.getElementById('btnCrearReparacion').onclick = () => {
        Swal.fire({
            title: '¿Desea establecer está solicitud como reparada?',
            text: "Presione aceptar si el mecánico ya ha llegado",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#5cb85c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('crearReparacion', document.getElementById('btnCrearReparacion').getAttribute('data-solicitud'));
            }
        })
    }
    }


</script>