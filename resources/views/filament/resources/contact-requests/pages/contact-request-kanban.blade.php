<x-filament-panels::page>
    <style>
        .kanban-board {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            padding-bottom: 16px;
            min-height: calc(100vh - 200px);
            align-items: flex-start;
        }

        .kanban-column {
            min-width: 300px;
            max-width: 300px;
            background: #f8fafc;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            border: 1px solid #e2e8f0;
            flex-shrink: 0;
        }

        .dark .kanban-column {
            background: #1e293b;
            border-color: #334155;
        }

        .kanban-column-header {
            padding: 12px 16px;
            border-radius: 12px 12px 0 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            border-bottom: 3px solid;
        }

        .kanban-column-header h3 {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #1e293b;
            margin: 0;
        }

        .dark .kanban-column-header h3 {
            color: #f1f5f9;
        }

        .kanban-column-header .count {
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            border-radius: 50%;
            min-width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
        }

        .kanban-column-body {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            overflow-y: auto;
            max-height: calc(100vh - 320px);
        }

        .kanban-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px;
            cursor: pointer;
            transition: all 0.15s ease;
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
            text-decoration: none;
            display: block;
            color: inherit;
        }

        .dark .kanban-card {
            background: #0f172a;
            border-color: #334155;
        }

        .kanban-card:hover {
            border-color: #6366f1;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.15);
            transform: translateY(-1px);
        }

        .kanban-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .kanban-card-app {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            color: #6366f1;
            background: #eef2ff;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .dark .kanban-card-app {
            background: rgba(99, 102, 241, 0.15);
            color: #a5b4fc;
        }

        .kanban-card-time {
            font-size: 10px;
            color: #94a3b8;
        }

        .kanban-card-name {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 2px;
        }

        .dark .kanban-card-name {
            color: #f1f5f9;
        }

        .kanban-card-company {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .dark .kanban-card-company {
            color: #94a3b8;
        }

        .kanban-card-email {
            font-size: 11px;
            color: #64748b;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .kanban-card-footer {
            display: flex;
            gap: 6px;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #f1f5f9;
            flex-wrap: wrap;
        }

        .dark .kanban-card-footer {
            border-top-color: #1e293b;
        }

        .kanban-badge {
            font-size: 10px;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 4px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .kanban-badge-wa {
            background: #ecfdf5;
            color: #059669;
        }

        .dark .kanban-badge-wa {
            background: rgba(5, 150, 105, 0.15);
            color: #34d399;
        }

        .kanban-badge-email {
            background: #eff6ff;
            color: #2563eb;
        }

        .dark .kanban-badge-email {
            background: rgba(37, 99, 235, 0.15);
            color: #60a5fa;
        }

        .kanban-badge-phone {
            background: #fefce8;
            color: #ca8a04;
        }

        .dark .kanban-badge-phone {
            background: rgba(202, 138, 4, 0.15);
            color: #facc15;
        }

        .kanban-empty {
            text-align: center;
            padding: 32px 16px;
            color: #94a3b8;
            font-size: 12px;
            border: 2px dashed #e2e8f0;
            border-radius: 8px;
        }

        .dark .kanban-empty {
            border-color: #334155;
            color: #475569;
        }

        /* Status Colors */
        .status-info    { border-color: #3b82f6; }
        .status-primary { border-color: #6366f1; }
        .status-warning { border-color: #f59e0b; }
        .status-success { border-color: #22c55e; }
        .status-danger  { border-color: #ef4444; }
        .status-gray    { border-color: #6b7280; }

        .count-info    { background: #3b82f6; }
        .count-primary { background: #6366f1; }
        .count-warning { background: #f59e0b; }
        .count-success { background: #22c55e; }
        .count-danger  { background: #ef4444; }
        .count-gray    { background: #6b7280; }
    </style>

    <div class="kanban-board">
        @php
            $records = $this->getRecords();
        @endphp

        @foreach ($this->getStatuses() as $status)
            @php
                $statusRecords = $records->where('status', $status);
                $color = $status->getColor();
            @endphp
            <div class="kanban-column">
                <div class="kanban-column-header status-{{ $color }}">
                    <h3>{{ $status->getLabel() }}</h3>
                    <span class="count count-{{ $color }}">{{ $statusRecords->count() }}</span>
                </div>

                <div class="kanban-column-body">
                    @forelse ($statusRecords as $record)
                        <a href="{{ \App\Filament\Resources\ContactRequests\ContactRequestResource::getUrl('edit', ['record' => $record]) }}"
                           class="kanban-card">
                            <div class="kanban-card-header">
                                <span class="kanban-card-app">
                                    {{ $record->application?->name ?? 'General' }}
                                </span>
                                <span class="kanban-card-time">
                                    {{ $record->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <div class="kanban-card-name">{{ $record->name }}</div>
                            <div class="kanban-card-company">{{ $record->company ?: 'Persona física' }}</div>
                            <div class="kanban-card-email">{{ $record->email }}</div>

                            <div class="kanban-card-footer">
                                @if($record->whatsapp)
                                    <span class="kanban-badge kanban-badge-wa">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492l4.638-1.467A11.932 11.932 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818c-2.168 0-4.19-.592-5.927-1.621l-.424-.254-2.752.87.886-2.686-.278-.442A9.776 9.776 0 012.182 12c0-5.418 4.4-9.818 9.818-9.818S21.818 6.582 21.818 12s-4.4 9.818-9.818 9.818z"/></svg>
                                        {{ $record->whatsapp }}
                                    </span>
                                @endif
                                @if($record->phone)
                                    <span class="kanban-badge kanban-badge-phone">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                                        Tel
                                    </span>
                                @endif
                                @if($record->email)
                                    <span class="kanban-badge kanban-badge-email">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 7L2 7"/></svg>
                                        Email
                                    </span>
                                @endif
                            </div>
                        </a>
                    @empty
                        <div class="kanban-empty">
                            Sin solicitudes
                        </div>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
</x-filament-panels::page>
