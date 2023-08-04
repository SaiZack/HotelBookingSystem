<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
           {{ __('Setting') }}<i class="fa-solid fa-gear ps-3"></i>
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4 py-10">
        @php
            $settings = [
                "Admin Users' Setting" => [
                    "icon" => "fa-users-gear",
                    "route" => "dashboard",
                    "summary" => "List of Administration Users, Add new account, Edit User Information and Delete Accounts.",
                ],
                "Guest List" => [
                    "icon" => "fa-users-viewfinder",
                    "route" => "dashboard",
                    "summary" => "List of Guests, Add new Guest, Edit Guest Information and Delete guests.",
                ],
                "Website Setting" => [
                    "icon" => "fa-sliders",
                    "route" => "dashboard",
                    "summary" => "Website Banner Images, Contact Emails, Phone Numbers and Other Informations.",
                ],
                "VIP Guests" => [
                    "icon" => "fa-star",
                    "route" => "dashboard",
                    "summary" => "Set VIP Member Guests to imporove Customer Management Services.",
                    "disabled" => true,
                ],
            ]
        @endphp

        @foreach ($settings as $title => $setting)
            @include('components.setting-card', [
                "title" => $title,
                "icon" => $setting['icon'],
                "route" => $setting['route'],
                "summary" => $setting['summary'],
                "disabled" => $setting['disabled'] ?? false,
            ])
        @endforeach
    </div>
</x-app-layout>