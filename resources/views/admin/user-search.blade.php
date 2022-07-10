@forelse($users as $user)
<tr class="border-b odd:bg-white even:bg-gray-50">
    <td class="px-6 py-4">{{$user->name}}</td>
    <td class="px-6 py-4"> {{$user->email}}</td>
    <td class="px-6 py-4">{{$user->user_type}}</td>
</tr>
@empty
@endforelse