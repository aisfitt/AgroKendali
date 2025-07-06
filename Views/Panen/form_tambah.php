<div id="popupForm" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Input Data Panen Baru</h2>
            <button onclick="closeForm()" class="text-2xl text-gray-500 hover:text-gray-800">&times;</button>
        </div>
        
        <form action="proses_tambah.php" method="post" class="space-y-4">
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Panen</label>
                <input type="date" id="tanggal" name="tanggal" required class="mt-1 w-full border border-gray-300 p-2 rounded-md shadow-sm">
            </div>
            <div>
                <label for="area_id" class="block text-sm font-medium text-gray-700">Area/Blok Kebun</label>
                <select id="area_id" name="area_id" required class="mt-1 w-full border border-gray-300 p-2 rounded-md shadow-sm">
                    <option value="1">Kebun A</option>
                    <option value="2">Kebun B</option>
                </select>
            </div>
            <div>
                <label for="berat" class="block text-sm font-medium text-gray-700">Berat Panen (kg)</label>
                <input type="number" step="0.01" id="berat" name="berat" required class="mt-1 w-full border border-gray-300 p-2 rounded-md shadow-sm">
            </div>
            <div>
                <label for="jumlah_tandan" class="block text-sm font-medium text-gray-700">Jumlah Tandan</label>
                <input type="number" id="jumlah_tandan" name="jumlah_tandan" required class="mt-1 w-full border border-gray-300 p-2 rounded-md shadow-sm">
            </div>
            <div class="flex justify-end gap-4 pt-4 mt-4 border-t">
                <button type="button" onclick="closeForm()" class="bg-gray-200 text-gray-800 font-bold px-6 py-2 rounded-lg hover:bg-gray-300">Batal</button>
                <button type="submit" class="bg-green-600 text-white font-bold px-6 py-2 rounded-lg hover:bg-green-700">Simpan</button>
            </div>
      </form>
    </div>
</div>