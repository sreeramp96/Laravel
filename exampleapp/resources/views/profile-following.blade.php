<x-profile :sharedData="$sharedData" doctitle="{{$sharedData['username']}}'s Followers">
@include('profile-following-only')
</x-profile>