<div>
    <input wire:model.lazy="name"type="text">
    {{-- <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option >Hello </option>
        <option >Goodbye </option>
        <option> adios </option>

    </select>
    {{ implode(', ', $greeting)}} {{ strtoupper($name) }} @if($loud) ! @endif
    <br>
    <br>
  <button  wire:mouseenter="resetName('Jahirul Reset New')">Reset Name</button> --}}
  {{$name}}
</div>
