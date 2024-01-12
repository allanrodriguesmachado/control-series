<form method="post" action="store" class="max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="Enter name">
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
</form>

