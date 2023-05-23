<x-app-layout>
    <x-slot name="header">
     </x-slot>
    <div class="max-w-6xl mx-auto mt-8">
     <div class="my-2 overflow-x-auto sm-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sn:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-58 dark:bg-gray-600 dark:text-gray-200">
             <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider">Id</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider">Nom</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider"> Original</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider"> Raccourci</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider">Visiteurs</th>
             </tr>
            </thead>
         <tbody class="bg-white divide-y divide-gray-200">
            <tr></tr>
            @foreach ($links as $link)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $link->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $link->nom }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $link->original_url }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ url ($link->short_url)}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $link->visits }}</td>

            </tr>
            @endforeach
         </tbody>
        </table>
         <div class="m-2 p-2">
          {{$links->links()}}</div>
        </div>
      </div>
     </div>
  </div>
</x-app-layout>



