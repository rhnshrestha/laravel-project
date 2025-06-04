@extends('backend.layout.dashboard_master');
@section('main-content')
<div class="container">
    <h2 class="mb-4">Create Website Settings</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Website Title -->
        <div class="mb-3">
            <label for="website_title" class="form-label">Website Title</label>
            <input type="text" name="website_title" id="website_title" class="form-control" required>
        </div>

        <!-- Slogan -->
        <div class="mb-3">
            <label for="slogan" class="form-label">Slogan</label>
            <input type="text" name="slogan" id="slogan" class="form-control">
        </div>

        <!-- Logo Top -->
        <div class="mb-3">
            <label for="logo_top" class="form-label">Logo (Top)</label>
            <input type="file" name="logo_top" id="logo_top" class="form-control" required>
        </div>

        <!-- Logo Bottom -->
        <div class="mb-3">
            <label for="logo_bottom" class="form-label">Logo (Bottom)</label>
            <input type="file" name="logo_bottom" id="logo_bottom" class="form-control">
        </div>

        <!-- Favicon -->
        <div class="mb-3">
            <label for="favicon" class="form-label">Favicon</label>
            <input type="file" name="favicon" id="favicon" class="form-control">
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <!-- Social Media -->
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook URL</label>
            <input type="url" name="facebook" id="facebook" class="form-control">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter URL</label>
            <input type="url" name="twitter" id="twitter" class="form-control">
        </div>

        <div class="mb-3">
            <label for="youtube" class="form-label">YouTube URL</label>
            <input type="url" name="youtube" id="youtube" class="form-control">
        </div>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram URL</label>
            <input type="url" name="instagram" id="instagram" class="form-control">
        </div>

        <div class="mb-3">
            <label for="linkedin" class="form-label">LinkedIn URL</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control">
        </div>

        <!-- Google Map -->
        <div class="mb-3">
            <label for="google_map" class="form-label">Google Map Embed Code</label>
            <textarea name="google_map" id="google_map" class="form-control" rows="3"></textarea>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <!-- Created By -->
        <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">

        <button type="submit" class="btn btn-success">Save Settings</button>
    </form>
</div>
@endsection