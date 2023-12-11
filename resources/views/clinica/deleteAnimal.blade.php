<!-- Modal -->
<div class="modal fade" id="delete-{{$animales->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('animal.destroy',$animales->id)}}" method="post">
          @csrf
          @method('DELETE')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminacion del animal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Estas seguro que quieres eliminar el animal {{ $animales->nombre }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="text-dark btn btn-outline-danger btn-sm" value='Eliminar'/>
        </div>
      </div>
          </form>
    </div>
  </div>
