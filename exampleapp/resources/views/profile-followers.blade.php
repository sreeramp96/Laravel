<x-profile :sharedData="$sharedData" doctitle="Who {{$sharedData['username']}} follows">
@include('profile-followers-only')
</x-profile>