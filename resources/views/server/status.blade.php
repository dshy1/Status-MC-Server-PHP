@extends('layouts.app')

@section('content')

<style>
.server{
    background-color: #212121;
    border-radius: 5px;
    color: #fff;
    width: 100%;
    padding: 20px;
    /* height: 10px; */
}
h3.titulo{
    color: #fff;
}
.status{
    font-size: 15px;
}
.status-online{
    color: #2ecc71;
    font-weight: 500;

}
.status-offline{
    color: #e74c3c;
    font-weight: 500;
    font-size: 20px;
}
.ip{
    border: none;
    margin-top: 15px;
    background-color: #4c4c4c;
    width: 100%;
    height: 30px;
    border-radius: 5px;
    padding: 3px;
    color: #fff;
    padding-left: 10px;
    cursor: pointer;
}
</style>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="server">
                <h3 class="titulo">Willy Server</h3>

                    @if($status->is_online())
                    <span> Servidor:
                        <span class="status status-online"> Online</span>
                    </span>
                    <br>
                    <span>
                        Players:
                        <span class="status status-online"> {{$status->get_current_players()}}</span>
                        / {{$status->get_max_players()}}
                    </span>
                    <br>
                    <input class="ip" id="ip" onClick="copy()" value="{{$ip}}:{{$port}}"
                    data-toggle="tooltip" title="Copiar IP" data-placement="top"/>

                    @else
                        <span class="status status-offline"> Servidor Offline</span>
                    @endif

            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <button class="btn btn-primary mt-3" onclick="location.reload()">Atualizar</button>
    </div>
</div>





@endsection

@section('scripts')
<script>
function copy() {
  /* Get the text field */
  var copyText = document.getElementById('ip');

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
//   alert("IP copiado: " + copyText.value);
}
</script>
@endsection
