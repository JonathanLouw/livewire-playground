<div>
    <h1>Example Component</h1>
    <button wire:click.prevent="loadArticles">Load</button>
    <div x-data="{ users: @js($users) }">
        <template x-for="user in users">
            <div x-text="user.name"></div>
        </template>
    </div>
</div>
