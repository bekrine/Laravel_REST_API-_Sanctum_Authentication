<x-layout-form>

@foreach ($fields as $field)
        
<div class="relative z-0 w-full mb-6 group">
    <input 
    type="{{$field['type']}}" 
    name="{{$field['name']}}" 
    id="{{$field['id']}}" 
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
    placeholder=" " required />
    <label for="{{$field['id']}}" 
    class="block mb-2 text-sm font-medium text-gray-900 "
    >
        {{$field['label']}}</label>
</div>

@endforeach

<button
style="background-color:blue"
 type="submit"
 class="w-full text-white
  bg-blue-700
   hover:bg-blue-800
   focus:ring-4 focus:outline-none 
   focus:ring-blue-300 font-medium 
   rounded-lg text-sm px-5 py-2.5 text-center
   "
  >Submit</button>

</x-layout-form>
