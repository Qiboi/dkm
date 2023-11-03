<nav class="fixed top-0 z-10 w-full">
    <div class="flex justify-between items-center py-4 px-24 bg-gray-800">
        <div>
            <h1 class="font-medium uppercase text-white">DKM Al-Furqon</h1>
        </div>
        <div class="flex space-x-4 items-center"
        x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
        x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
        x-id="['dropdown-button']"
        >
            <a href="#" class="font-medium text-sm text-white">About Us</a>
            <a href="#" class="font-medium text-sm text-white">Member</a>
            @if(auth())
            <button class="font-medium text-sm text-white flex items-center gap-2"
                    x-ref="button"
                    x-on:click="toggle()"
                    :aria-expanded="open"
                    :aria-controls="$id('dropdown-button')"
                    type="button"
                    >
                Hai, {{ auth()->user()->name }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute right-20 top-12 mt-2 w-40 rounded-md bg-gray-800 shadow-md"
            >
    
                <form action="{{ route('logout') }}" method="POST" class="flex items-center gap-2 ">
                    @csrf
                    <button type="submit" class="text-white font-medium w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-red-600 disabled:text-gray-500">Log Out</button>
                </form>
            </div>
            @else
            <a href="{{ route('login') }}" class="font-medium text-sm py-2 px-4 bg-white text-gray-800 rounded">Login</a>
            @endif
        </div>
    </div>
</div>