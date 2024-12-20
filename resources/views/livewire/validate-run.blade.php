<div>
    <section class="mb-12">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <div class="flex-1">
                    <input type="text" wire:model="run" placeholder="Enter RUN"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
                <button wire:click="validateRun"
                    class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center justify-center"
                    title="Validar">
                    <i class="fas fa-check"></i>
                </button>
            </div>
            <div class="flex flex-col md:flex-row gap-4">
                <input type="text" wire:model="validatedRun" readonly
                    class="flex-1 px-4 py-2 bg-gray-50 border rounded-lg" placeholder="Validation Result">
                <button
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center justify-center"
                    title="Copiar">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
        </div>
    </section>
</div>
