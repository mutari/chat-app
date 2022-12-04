<div id="apps" class="grid grid-cols-3 gap-2">
    @guest
        <x-app icon="map" href="http://test.mutariproject.com/index.php">Map</x-app>
        <x-app icon="exclamationTriangle" href="/test">Experiments</x-app>
    @endguest
    @auth
        <x-app icon="map" href="http://test.mutariproject.com/index.php">Map</x-app>
        <x-app icon="bord" href="/post">Posts</x-app>
        <x-app icon="chatBubble" href="/chat">Chat</x-app>
        <x-app icon="glass" href="/drinking">Drinking</x-app>
        <x-app icon="link" href="/link">Links</x-app>
        <x-app icon="exclamationTriangle" href="/test">Experiments</x-app>
    @endauth
</div>
