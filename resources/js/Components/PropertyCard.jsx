import { MapPin } from "lucide-react";

export default function PropertyCard() {
    return (
        <div class="flex flex-col md:flex-row items-center justify-between p-6 bg-white rounded-lg shadow-sm border border-gray-100 mb-4 hover:shadow-md transition-shadow">
    
    <div class="flex items-center space-x-6 w-full md:w-1/2">
        <img src="path/to/property-thumb.jpg" alt="Property" class="w-20 h-20 rounded-md object-cover">
        <div>
            <h3 class="text-xl font-bold text-slate-800">Sunshine Apartments</h3>
            <p class="text-gray-500 flex items-center">
                <span class="mr-1 text-sm">📍</span> Westlands, Nairobi
            </p>
        </div>
    </div>

    <div class="flex space-x-12 mt-4 md:mt-0 w-full md:w-1/3">
        <div>
            <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Total Units</p>
            <p class="text-lg font-bold text-slate-700">24 Units</p>
        </div>
        <div>
            <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Availability</p>
            <p class="text-lg font-bold text-red-600">2 Vacant</p>
        </div>
    </div>

    <div class="mt-4 md:mt-0">
        <button class="px-8 py-2 bg-slate-600 text-white font-medium rounded-md hover:bg-slate-700 transition-colors">
            Manage
        </button>
    </div>
</div>
    );
}