@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة المحتوى</p>
                <h2 class="fw-bold mb-0">تعديل الخدمة: {{ $service->slug }}</h2>
            </div>
            <a href="{{ route('dashboard.services.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة</span>
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('dashboard.services.update', $service) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                     <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">العنوان</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}"
                                required placeholder="عنوان الخدمة">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">العنوان الفرعي</label>
                            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $service->subtitle) }}"
                                required placeholder="عنوان فرعي يوضح الخدمة">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">الوصف</label>
                            <div id="description-container">
                                <textarea name="description" rows="3" class="form-control mb-2" placeholder="أدخل سطر من الوصف">{{ old('description', $service->description) }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">الصورة</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-muted">يفضل صورة أفقية واضحة.</small>
                            @if ($service->image)
                                <div class="mt-2">
                                    <img src="{{ $service->getImageUrl() }}" alt="صورة الخدمة"
                                        style="width: 140px; height: 140px; object-fit: cover;" class="rounded border">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div x-data="linksForm()" class="mb-5 mt-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h5 class="fw-bold mb-0">الروابط</h5>
                            <button type="button" class="btn btn-secondary btn-sm" @click="addLink()">أضف رابط</button>
                        </div>

                        <template x-for="(link, index) in links" :key="index">
                            <div class="d-flex mb-2 gap-2">
                                <input type="text" class="form-control" placeholder="المفتاح" x-model="link.key">
                                <input type="text" class="form-control" placeholder="الرابط" x-model="link.value">
                                <button type="button" class="btn btn-danger btn-sm" @click="removeLink(index)">حذف</button>
                            </div>
                        </template>

                        <input type="hidden" name="links" :value="JSON.stringify(links)">
                    </div>
                    <div x-data="page_dataForm()" class="mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h5 class="fw-bold mb-0">محتوى الصفحة</h5>
                            <button type="button" class="btn btn-secondary btn-sm" @click="addSection()">أضف قسم</button>
                        </div>

                        <input type="hidden" name="page_files[]">
                        <template x-for="(section, index) in data.sections" :key="index">
                            <div class="mb-3 p-3 border rounded">
                                <input type="text" class="form-control mb-2" placeholder="عنوان القسم" x-model="section.title">
                                <textarea class="form-control mb-2" rows="4" placeholder="محتوى القسم" x-model="section.content"></textarea>
                                <button type="button" class="btn btn-danger btn-sm" @click="removeSection(index)">حذف
                                    القسم</button>
                            </div>
                        </template>

                        <input type="hidden" name="page_sections" :value="JSON.stringify(data.sections)">

                    </div>
                    <script>
                        let links = JSON.parse(@json(old('links', json_encode($service->links ?? [], JSON_UNESCAPED_UNICODE))));
                        try {
                            links = JSON.parse(links);
                        } catch (e) {}

                        function linksForm() {
                            return {
                                links,
                                addLink() {
                                    this.links.push({ key: '', value: '' });
                                },
                                removeLink(index) {
                                    this.links.splice(index, 1);
                                }
                            }
                        }

                        let sections = [];
                        try {
                            sections = @json($service->page_sections);
                        } catch (e) {}

                        function page_dataForm() {
                            return {
                                data: { sections },
                                addSection() {
                                    this.data.sections.push({ title: '', content: '' });
                                },
                                removeSection(index) {
                                    this.data.sections.splice(index, 1);
                                }
                            }
                        }
                    </script>

                    <div class="d-flex gap-2">
                        <button class="btn btn-primary d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-check"></i>
                            <span>تحديث الخدمة</span>
                        </button>
                        <a href="{{ route('dashboard.services.index') }}" class="btn btn-outline-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
