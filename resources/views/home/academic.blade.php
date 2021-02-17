@include('layout.header')

<section class="inner-banner" style="background-image:url(https://s3-id-jkt-1.kilatstorage.id/haxors-bucket/cdn/default.jpg)">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Uinsu</a></li>
            <li class="active"><a href="#">Academic</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">Faculty</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="course-one course-page">
    <div class="container">
        <div class="row">


            @foreach($dataFakultas as $fakultas)
            <div class="col-lg-4">
                <div class="course-one__single">
                    <div class="course-one__image">
                        <img src="https://s3-id-jkt-1.kilatstorage.id/haxors-bucket/cdn/fitk-cover.png" alt="">
                        <i class="far fa-heart"></i><!-- /.far fa-heart -->
                    </div><!-- /.course-one__image -->
                    <div class="course-one__content">
                        <a href="#" class="course-one__category">{{ $fakultas -> prefix }}</a><!-- /.course-one__category -->
                        <h2 class="course-one__title"><a href="course-details.html">{{ $fakultas -> nama_fakultas }}</a></h2>
                        <div class="course-one__admin" style="margin-top:20px;">
                            {{ $fakultas -> deksripsi_fakultas }}
                        </div><!-- /.course-one__admin -->
                        
                        <!-- /.course-one__title -->
                       
                        <div class="course-one__meta">
                            <a href="course-details.html"><i class="far fa-clock"></i> Study Programs</a>
                            <a href="course-details.html"><i class="far fa-folder-open"></i> 1022 Student</a>
                        </div><!-- /.course-one__meta -->
                        <div style="margin-top:20px;">
                            <ul>
                                <li>Manajemen Pendidikan</li>
                                <li>Pendidikan Matematika</li>
                                <li>Pendidikan Guru Madrasah Ibtidaiyah</li>
                                <li>Tadris Ilmu Pengetahuan Sosial</li>
                                <li>Pendidikan Islam Anak Usia Dini</li>
                            </ul>
                        </div>
                        <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                    </div><!-- /.course-one__content -->
                </div><!-- /.course-one__single -->
            </div><!-- /.col-lg-4 -->
            @endforeach
            
            
        </div><!-- /.row -->
        <div class="post-pagination">
            <a href="#"><i class="fa fa-angle-double-left"></i><!-- /.fa fa-angle-double-left --></a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#"><i class="fa fa-angle-double-right"></i><!-- /.fa fa-angle-double-left --></a>
        </div><!-- /.post-pagination -->

    </div><!-- /.container -->
</section><!-- /.course-one course-page -->

@include('layout.footer')