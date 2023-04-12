<x-layout title="Cadastrar serie">
   <x-form :action="route('series.store')" :nome="old('nome')" :update="false"/>
</x-layout>

