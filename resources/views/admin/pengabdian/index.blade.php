@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Pengabdian Masyarakat</h2>
        <a href="{{ route('pengabdian.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            <i class="fas fa-plus mr-2"></i> Tambah Baru
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Target</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Lokasi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Durasi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($pengabdian as $item)
                <tr>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-gray-900">{{ $item->title }}</div>
                        <div class="text-sm text-gray-500 line-clamp-2">{{ Str::limit($item->description, 80) }}</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->target_audience }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->location }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d M Y') }}</td>
                    <td class="px-6 py-4 text-sm">
                        <span class="inline-block px-2 py-1 rounded-full text-white text-xs {{ $item->status === 'Completed' ? 'bg-green-600' : ($item->status === 'Ongoing' ? 'bg-yellow-500' : 'bg-gray-500') }}">
                            {{ $item->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm font-medium">
                        <a href="{{ route('pengabdian.edit', $item->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('pengabdian.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data pengabdian masyarakat.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
