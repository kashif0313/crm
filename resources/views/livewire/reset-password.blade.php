<div class="flex w-screen justify-center">
    <div class=" max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 ">
        <form wire:submit='resetPassword' class="space-y-6" action="#">
            <h5 class="text-xl font-medium text-gray-900 ">Reset Password </h5>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Enter New Password</label>
                <input type="password" wire:model='Password' name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Retype New Password</label>
                <input type="password" wire:model='retypePassword' name="r_password" id="r_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required>
            </div>
           
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center "> Reset Password</button>
            
        </form>
    </div>
</div>
    