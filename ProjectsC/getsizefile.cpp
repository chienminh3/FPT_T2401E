#include <stdio.h>
#include <stdlib.h>

int getFileSize(const char *filename) {
    FILE *file = fopen(filename, "rb"); // M? t?p v?i mode "rb" (ð?c nh? phân)
    int size = 0;

    if (file == NULL) {
        printf("Khong the mo file.\n");
        exit(EXIT_FAILURE);
    }

    fseek(file, 0, SEEK_END); // Ðýa con tr? t?p v? cu?i t?p
    size = ftell(file);       // L?y v? trí con tr?, t?c là kích thý?c c?a t?p
    fclose(file);             // Ðóng t?p

    return size;
}

int main() {
    const char *filename = "student_info.txt";
    int initialSize, currentSize;

    initialSize = getFileSize(filename);

    // Th?c hi?n các thao tác ghi vào t?p tin ? ðây...

    // Sau khi th?c hi?n các thao tác ghi vào t?p tin, ki?m tra kích thý?c c?a t?p tin
    currentSize = getFileSize(filename);

    // So sánh kích thý?c hi?n t?i v?i kích thý?c ban ð?u
    if (currentSize > initialSize) {
        printf("Tep tin %s da thay doi.\n", filename);
    } else {
        printf("Tep tin %s khong thay doi.\n", filename);
    }

    return 0;
}

