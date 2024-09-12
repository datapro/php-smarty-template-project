{if $success}
    <p>Registration successful!</p>
    <p>Username: {$username}</p>
    <p>Email: {$email}</p>
{else}
    {foreach from=$errors item=error}
        <p style="color: red;">{$error}</p>
    {/foreach}
{/if}
