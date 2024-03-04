<div>
    <form  class="max-w-sm mx-auto mt-5">
        
        <x-input title="Role Name" nameInput='role'  modelName='roleName' ></x-input>       
        <x-textarea name="detail" title="Details" wireModel="roleDetails"></x-textarea>
    
        <div class="divide-y ">
            <div class="flex mt-3 mb-3">
                <span class="mx-5">Models</span>
                <x-checkbox wireModel="modelUser" checkboxName="Users" ></x-checkbox>
                <x-checkbox wireModel="modelRole" checkboxName="Roles" ></x-checkbox>
            </div>
             <div class="flex pt-3 mb-3">
                <span class="mx-5">Permissions </span>
                <x-checkbox wireModel="createPermission" checkboxName="Create" ></x-checkbox>
                <x-checkbox wireModel="readPermission" checkboxName="Read" ></x-checkbox>
                <x-checkbox wireModel="editPermission" checkboxName="Edit" ></x-checkbox>
                <x-checkbox wireModel="deletePermission" checkboxName="Delete" ></x-checkbox>
            </div>
        </div>
        <x-button btnName='Submit' clickFunction="create"></x-button>
        <x-navButton btnName='Cancel' linkRef='/roles'>
        </x-navButton>
</form>
</div>