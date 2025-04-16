@extends('client.layouts.main')

@section('content')
    <!-- Breadcrumb section -->
    <div class="xc-breadcrumb__area base-bg">
        <div class="xc-breadcrumb__bg w-img xc-breadcrumb__overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="xc-breadcrumb__content p-relative z-index-1">
                        <div class="xc-breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="icon-arrow-right"></i></span>
                            <span>View_Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders section -->
    <section class="section-orders py-5">
        <div class="container">
            <h3>Đơn hàng của tôi</h3>
            <!-- Tabs for order status -->
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tatca-tab" data-bs-toggle="tab" data-bs-target="#tatca"
                        type="button" role="tab" aria-controls="tatca" aria-selected="true">Tất cả đơn hàng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="dangxuly-tab" data-bs-toggle="tab" data-bs-target="#dangxuly"
                        type="button" role="tab" aria-controls="dangxuly" aria-selected="false">Đang xử lý</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="daxacnhan-tab" data-bs-toggle="tab" data-bs-target="#daxacnhan"
                        type="button" role="tab" aria-controls="daxacnhan" aria-selected="false">Đã xác nhận</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="danggiaohang-tab" data-bs-toggle="tab" data-bs-target="#danggiaohang"
                        type="button" role="tab" aria-controls="danggiaohang" aria-selected="false">Đang giao
                        hàng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="thanhcong-tab" data-bs-toggle="tab" data-bs-target="#thanhcong"
                        type="button" role="tab" aria-controls="thanhcong" aria-selected="false">Đã hoàn thành</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="dabihuy-tab" data-bs-toggle="tab" data-bs-target="#dabihuy" type="button"
                        role="tab" aria-controls="dabihuy" aria-selected="false">Đã bị huỷ</button>
                </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content" id="myTabContent">
                <!-- Tất cả đơn hàng -->
                <div class="tab-pane fade show active" id="tatca" role="tabpanel" aria-labelledby="tatca-tab">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded" alt="Product Image"
                                        loading="lazy">
                                </div>
                                <div class="col-md-6 col-8">
                                    <h5 class="card-title mb-1">Áo thun nam</h5>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-1">Thời gian đặt hàng: <span class="text-muted">04/04/2025</span></p>
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                </div>
                                <div class="col-md-4 text-md-end text-start mt-3 mt-md-0">
                                    <span class="badge bg-primary mb-2">Đang xử lý</span>
                                    <div class="d-flex gap-2 justify-content-md-end">
                                        <a href="/view-detail-order/1" class="btn btn-outline-primary btn-sm">Xem chi
                                            tiết</a>
                                        <button type="button" class="btn btn-outline-danger btn-sm cancel-order-btn"
                                            data-order-id="1" data-bs-toggle="modal" data-bs-target="#cancelModal">Huỷ
                                            đơn hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đang xử lý -->
                <div class="tab-pane fade" id="dangxuly" role="tabpanel" aria-labelledby="dangxuly-tab">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded"
                                        alt="Product Image" loading="lazy">
                                </div>
                                <div class="col-md-6 col-8">
                                    <h5 class="card-title mb-1">Áo thun nam</h5>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-1">Thời gian đặt hàng: <span class="text-muted">04/04/2025</span></p>
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                </div>
                                <div class="col-md-4 text-md-end text-start mt-3 mt-md-0">
                                    <span class="badge bg-primary mb-2">Đang xử lý</span>
                                    <div class="d-flex gap-2 justify-content-md-end">
                                        <a href="/view-detail-order/1" class="btn btn-outline-primary btn-sm">Xem chi
                                            tiết</a>
                                        <button type="button" class="btn btn-outline-danger btn-sm cancel-order-btn"
                                            data-order-id="1" data-bs-toggle="modal" data-bs-target="#cancelModal">Huỷ
                                            đơn hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đã xác nhận -->
                <div class="tab-pane fade" id="daxacnhan" role="tabpanel" aria-labelledby="daxacnhan-tab">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded"
                                        alt="Product Image" loading="lazy">
                                </div>
                                <div class="col-md-6 col-8">
                                    <h5 class="card-title mb-1">Áo thun nam</h5>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-1">Thời gian đặt hàng: <span class="text-muted">04/04/2025</span></p>
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                </div>
                                <div class="col-md-4 text-md-end text-start mt-3 mt-md-0">
                                    <span class="badge bg-info mb-2">Đã xác nhận</span>
                                    <div class="d-flex gap-2 justify-content-md-end">
                                        <a href="/view-detail-order/1" class="btn btn-outline-primary btn-sm">Xem chi
                                            tiết</a>
                                        <button type="button" class="btn btn-outline-danger btn-sm cancel-order-btn"
                                            data-order-id="1" data-bs-toggle="modal" data-bs-target="#cancelModal">Huỷ
                                            đơn hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đang giao hàng -->
                <div class="tab-pane fade" id="danggiaohang" role="tabpanel" aria-labelledby="danggiaohang-tab">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded"
                                        alt="Product Image" loading="lazy">
                                </div>
                                <div class="col-md-6 col-8">
                                    <h5 class="card-title mb-1">Áo thun nam</h5>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-1">Thời gian đặt hàng: <span class="text-muted">04/04/2025</span></p>
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                </div>
                                <div class="col-md-4 text-md-end text-start mt-3 mt-md-0">
                                    <span class="badge bg-warning mb-2">Đang giao hàng</span>
                                    <div class="d-flex gap-2 justify-content-md-end">
                                        <a href="/view-detail-order/1" class="btn btn-outline-primary btn-sm">Xem chi
                                            tiết</a>
                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#confirmModal1">Xác nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đã hoàn thành -->
                <div class="tab-pane fade" id="thanhcong" role="tabpanel" aria-labelledby="thanhcong-tab">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded"
                                        alt="Product Image" loading="lazy">
                                </div>
                                <div class="col-md-6 col-8">
                                    <h5 class="card-title mb-1">Áo thun nam</h5>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-1">Thời gian đặt hàng: <span class="text-muted">04/04/2025</span></p>
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                </div>
                                <div class="col-md-4 text-md-end text-start mt-3 mt-md-0">
                                    <span class="badge bg-success mb-2">Đã hoàn thành</span>
                                    <div class="d-flex gap-2 justify-content-md-end">
                                        <a href="/view-detail-order/1" class="btn btn-outline-primary btn-sm">Xem chi
                                            tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đã bị huỷ -->
                <div class="tab-pane fade" id="dabihuy" role="tabpanel" aria-labelledby="dabihuy-tab">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded"
                                        alt="Product Image" loading="lazy">
                                </div>
                                <div class="col-md-6 col-8">
                                    <h5 class="card-title mb-1">Áo thun nam</h5>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-1">Thời gian đặt hàng: <span class="text-muted">04/04/2025</span></p>
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                </div>
                                <div class="col-md-4 text-md-end text-start mt-3 mt-md-0">
                                    <span class="badge bg-danger mb-2">Đã bị huỷ</span>
                                    <div class="d-flex gap-2 justify-content-md-end">
                                        <a href="/view-detail-order/1" class="btn btn-outline-primary btn-sm">Xem chi
                                            tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Trước</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Sau</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Modal for cancelling order (chung cho tất cả đơn hàng) -->
    <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancelModalLabel">Lý do huỷ đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cancelOrderForm" method="POST">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Lý do:</label>
                            <textarea class="form-control" id="message-text" name="message" placeholder="Nhập lý do huỷ đơn hàng"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                            <button type="submit" name="submit_cancel" class="btn btn-primary">Gửi yêu cầu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for confirming order -->
    <div class="modal fade" id="confirmModal1" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Xác nhận đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Xác nhận đã nhận hàng thành công?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <a href="/confirm-order-done/1" class="btn btn-success">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // JavaScript để cập nhật action của form huỷ đơn hàng dựa trên order_id
        document.addEventListener('DOMContentLoaded', function() {
            const cancelButtons = document.querySelectorAll('.cancel-order-btn');
            const cancelForm = document.getElementById('cancelOrderForm');

            cancelButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const orderId = this.getAttribute('data-order-id');
                    cancelForm.action = `/cancel-order/${orderId}`;
                });
            });
        });
    </script>
@endsection
