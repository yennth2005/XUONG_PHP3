@extends('client.layouts.main')

@section('content')
    <!-- Checkout section -->
    <section class="section-cart py-5">
        <div class="container">
            <h1 class="mb-4">Chi tiết đơn hàng</h1>
            <div class="row">
                <!-- Thông tin người nhận -->
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Thông tin người nhận</h4>
                            <p><strong>Khách hàng:</strong> Nguyễn Văn A</p>
                            <p><strong>Số điện thoại:</strong> 0123 456 789</p>
                            <p><strong>Địa chỉ:</strong> 123 Đường Láng, Đống Đa, Hà Nội</p>
                            <p><strong>Lời nhắn:</strong> Giao hàng trong giờ hành chính</p>
                        </div>
                    </div>
                </div>

                <!-- Lịch sử trạng thái đơn hàng -->
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Lịch sử trạng thái</h4>
                            <div class="timeline">
                                <div class="timeline-event row mb-3">
                                    <div class="col-md-4 timeline-date text-muted">04/04/2025 10:00</div>
                                    <div class="col-md-8 timeline-content">
                                        <strong>Đang xử lý</strong><br>
                                        Đơn hàng đã được đặt thành công.
                                    </div>
                                </div>
                                <div class="timeline-event row mb-3">
                                    <div class="col-md-4 timeline-date text-muted">04/04/2025 12:00</div>
                                    <div class="col-md-8 timeline-content">
                                        <strong>Đã xác nhận</strong><br>
                                        Đơn hàng đã được xác nhận bởi cửa hàng.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Danh sách sản phẩm -->
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Sản phẩm trong đơn hàng</h4>
                            <div class="row align-items-center mb-3">
                                <div class="col-md-2 col-4">
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded" alt="Product Image"
                                        loading="lazy">
                                </div>
                                <div class="col-md-7 col-8">
                                    <h5 class="card-title mb-1">
                                        <a href="/view-detail/1">Áo thun nam</a>
                                    </h5>
                                    <p class="mb-1">Màu: Đen - Size: M</p>
                                    <p class="mb-1">Giá: <span class="text-danger fw-bold">300,000đ</span></p>
                                    <p class="mb-0">Số lượng: <span class="text-info fw-bold">x 1</span></p>
                                </div>
                                <div class="col-md-3 text-md-end text-start mt-3 mt-md-0">
                                    <p class="mb-0">Tổng tiền: <span class="text-success fw-bold">300,000đ</span></p>
                                    <button type="button" class="btn btn-success btn-sm mt-2 comment-btn" data-item-id="1"
                                        data-product-id="1" data-order-id="1" data-bs-toggle="modal"
                                        data-bs-target="#commentModal">Đánh giá</button>
                                    <button type="button" class="btn btn-success btn-sm mt-2 view-comment-btn"
                                        data-item-id="1" data-product-id="1" data-order-id="1" data-comment-id="1"
                                        data-title="Sản phẩm tốt" data-content="Chất lượng vải rất ổn, giao hàng nhanh"
                                        data-bs-toggle="modal" data-bs-target="#viewCommentModal">Xem đánh giá</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tổng kết đơn hàng -->
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Tổng kết đơn hàng</h4>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Tổng tiền hàng</td>
                                        <td class="text-end">300,000đ</td>
                                    </tr>
                                    <tr>
                                        <td>Phí vận chuyển</td>
                                        <td class="text-end">+20,000đ</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm giá phí vận chuyển</td>
                                        <td class="text-end text-danger">-20,000đ</td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td>Thành tiền</td>
                                        <td class="text-end text-success">300,000đ</td>
                                    </tr>
                                    <tr>
                                        <td>Phương thức thanh toán</td>
                                        <td class="text-end">Thanh toán khi nhận hàng</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for commenting (chung cho tất cả sản phẩm) -->
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commentModalLabel">Đánh giá sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="commentForm" method="POST" action="/add-comment">
                        <div class="mb-3">
                            <label for="comment-title" class="col-form-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="comment-title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="comment-content" class="col-form-label">Nội dung:</label>
                            <textarea class="form-control" id="comment-content" name="content" required></textarea>
                        </div>
                        <input type="hidden" name="rating" id="rating" value="">
                        <input type="hidden" name="product_id" id="product_id" value="1">
                        <input type="hidden" name="order_id" id="order_id" value="1">
                        <input type="hidden" name="order_item_id" id="order_item_id" value="1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                            <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for viewing/editing comment (chung cho tất cả sản phẩm) -->
    <div class="modal fade" id="viewCommentModal" tabindex="-1" aria-labelledby="viewCommentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewCommentModalLabel">Sửa đánh giá sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="viewCommentForm" method="POST" action="/update-comment/1">
                        <div class="mb-3">
                            <label for="view-comment-title" class="col-form-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="view-comment-title" name="title"
                                value="Sản phẩm tốt" required>
                        </div>
                        <div class="mb-3">
                            <label for="view-comment-content" class="col-form-label">Nội dung:</label>
                            <textarea class="form-control" id="view-comment-content" name="content" required>Chất lượng vải rất ổn, giao hàng nhanh</textarea>
                        </div>
                        <input type="hidden" name="rating" id="view-rating" value="">
                        <input type="hidden" name="product_id" id="view-product_id" value="1">
                        <input type="hidden" name="order_id" id="view-order_id" value="1">
                        <input type="hidden" name="order_item_id" id="view-order_item_id" value="1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                            <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // JavaScript để cập nhật action của form đánh giá và điền dữ liệu vào modal
        document.addEventListener('DOMContentLoaded', function() {
            const commentButtons = document.querySelectorAll('.comment-btn');
            const viewCommentButtons = document.querySelectorAll('.view-comment-btn');
            const commentForm = document.getElementById('commentForm');
            const viewCommentForm = document.getElementById('viewCommentForm');
            const productIdInput = document.getElementById('product_id');
            const orderIdInput = document.getElementById('order_id');
            const orderItemIdInput = document.getElementById('order_item_id');
            const viewProductIdInput = document.getElementById('view-product_id');
            const viewOrderIdInput = document.getElementById('view-order_id');
            const viewOrderItemIdInput = document.getElementById('view-order_item_id');
            const viewTitleInput = document.getElementById('view-comment-title');
            const viewContentInput = document.getElementById('view-comment-content');

            commentButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');
                    const productId = this.getAttribute('data-product-id');
                    const orderId = this.getAttribute('data-order-id');

                    commentForm.action = `/add-comment`;
                    productIdInput.value = productId;
                    orderIdInput.value = orderId;
                    orderItemIdInput.value = itemId;
                });
            });

            viewCommentButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');
                    const productId = this.getAttribute('data-product-id');
                    const orderId = this.getAttribute('data-order-id');
                    const commentId = this.getAttribute('data-comment-id');
                    const title = this.getAttribute('data-title');
                    const content = this.getAttribute('data-content');

                    viewCommentForm.action = `/update-comment/${commentId}`;
                    viewProductIdInput.value = productId;
                    viewOrderIdInput.value = orderId;
                    viewOrderItemIdInput.value = itemId;
                    viewTitleInput.value = title;
                    viewContentInput.value = content;
                });
            });
        });
    </script>
@endsection
