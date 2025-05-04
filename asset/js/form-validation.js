document.addEventListener('DOMContentLoaded', function() {
    // Form komentar artikel
    const commentForm = document.getElementById('commentForm');
    if (commentForm) {
        commentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Reset pesan error sebelumnya
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
            
            // Dapatkan nilai form
            const artikelId = document.getElementById('artikel_id').value;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const comment = document.getElementById('comment').value;
            
            // Validasi dasar
            let hasError = false;
            
            if (!name.trim()) {
                document.getElementById('nameError').textContent = 'Nama tidak boleh kosong';
                hasError = true;
            }
            
            if (!email.trim()) {
                document.getElementById('emailError').textContent = 'Email tidak boleh kosong';
                hasError = true;
            } else if (!isValidEmail(email)) {
                document.getElementById('emailError').textContent = 'Format email tidak valid';
                hasError = true;
            }
            
            if (!comment.trim()) {
                document.getElementById('commentError').textContent = 'Komentar tidak boleh kosong';
                hasError = true;
            }
            
            if (!hasError) {
                // Tampilkan indikator loading
                const submitBtn = document.getElementById('submitCommentBtn');
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...';
                submitBtn.disabled = true;
                
                // Kirim data menggunakan fetch API
                const formData = new FormData();
                formData.append('artikel_id', artikelId);
                formData.append('name', name);
                formData.append('email', email);
                formData.append('comment', comment);
                
                fetch('../config/process_comment.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Reset tombol
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                    
                    const responseEl = document.getElementById('commentFormResponse');
                    
                    if (data.success) {
                        // Tampilkan pesan sukses
                        responseEl.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                        
                        // Reset form
                        commentForm.reset();
                        
                        // Tambahkan parameter ke URL saat refresh
                        const currentUrl = window.location.href.split('#')[0];
                        const refreshUrl = currentUrl + 
                            (currentUrl.includes('?') ? '&' : '?') + 
                            'newcomment=true#comments-section';
                        
                        // Tunda refresh sejenak agar pesan sukses bisa dibaca
                        setTimeout(function() {
                            window.location.href = refreshUrl;
                        }, 1500);
                    } else {
                        // Tampilkan pesan error
                        responseEl.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                    
                    const responseEl = document.getElementById('commentFormResponse');
                    responseEl.innerHTML = '<div class="alert alert-danger">Terjadi kesalahan saat mengirim komentar. Silakan coba lagi.</div>';
                });
            }
        });
    }
});

// Fungsi validasi email
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Fungsi untuk menambahkan komentar baru ke dalam daftar komentar
function addNewComment(comment) {
    const commentsList = document.getElementById('comments-list');
    
    if (commentsList) {
        // Buat elemen komentar baru
        const commentElement = document.createElement('div');
        commentElement.className = 'd-flex mb-3 p-3 bg-white rounded shadow-sm';
        commentElement.innerHTML = `
            <div class="flex-shrink-0">
                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 45px; height: 45px;">
                    <span class="fw-bold">${comment.nama.charAt(0).toUpperCase()}</span>
                </div>
            </div>
            <div class="ms-3">
                <h6 class="fw-bold mb-1">${comment.nama}</h6>
                <p class="mb-1">${comment.komentar}</p>
                <small class="text-muted">${comment.tanggal}</small>
            </div>
        `;
        
        // Tambahkan efek highlight pada komentar baru
        commentElement.style.animation = 'highlightComment 2s ease-in-out';
        
        // Tambahkan style untuk animasi highlight jika belum ada
        if (!document.getElementById('comment-animation-style')) {
            const style = document.createElement('style');
            style.id = 'comment-animation-style';
            style.textContent = `
                @keyframes highlightComment {
                    0% { background-color: #e3f2fd; }
                    70% { background-color: #e3f2fd; }
                    100% { background-color: white; }
                }
            `;
            document.head.appendChild(style);
        }
        
        // Masukkan komentar ke dalam daftar
        commentsList.appendChild(commentElement);
        
        // Scroll ke komentar terbaru
        const commentsContainer = document.querySelector('.comments-container');
        if (commentsContainer) {
            commentsContainer.scrollTop = commentsContainer.scrollHeight;
        }
    }
}