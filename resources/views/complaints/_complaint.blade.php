@php
    $complaintStats = \App\Helpers\ComplaintHelper::getReviewStats($complaint);
@endphp
<div class="col-sm-6 col-lg-4">
    <div class="card p-2 h-100 shadow-none border">
        <div class="rounded-2 text-center mb-3">
            <a href="{{ $complaint->getUrl() }}"><img class="img-fluid" src="{{ $complaint->getMainSrc() }}" alt="tutor image 1" /></a>
        </div>
        <div class="card-body p-3 pt-2">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-primary">{{ $complaint->getCategoryName() }}</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                    {{ $complaintStats['review_start'] }}
                    <span class="text-warning"><i class="bx bxs-star me-1"></i></span>
                    <span class="text-muted">({{ $complaintStats['review_count'] }})</span>
                </h6>
            </div>
            <a href="{{ $complaint->getUrl() }}" class="h5">{{ $complaint->getTitle() }}</a>
            <p class="mt-2">{{ $complaint->getShortDescription() }}</p>
            <p class="d-flex align-items-center"><i class="bx bx-time-five me-2"></i>{{ $complaintStats['remain_count_text'] }}</p>
            <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar " role="progressbar" style="width: {{ $complaintStats['percent_review'] }}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex flex-column flex-md-row gap-2 text-nowrap pe-xl-3 pe-xxl-0">
                @php

                @endphp
                @if(auth()->check() && ($myReview = $complaint->myReview(auth()->id())))

                @endif

                <a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="{{ $complaint->getUrl() }}">
                    <i class="bx bx-sync align-middle me-2 "></i><span>{{ __("Vote") }}</span>
                </a>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="{{ $complaint->getUrl() }}">
                    <span class="me-2">{{ __("Show") }}</span><i class="bx bx-chevron-right lh-1 scaleX-n1-rtl"></i>
                </a>
            </div>
        </div>
    </div>
</div>
