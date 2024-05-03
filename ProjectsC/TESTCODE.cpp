 #include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX_NAME_LENGTH 50
#define MAX_STUDENTS 100

struct Student {
    char name[MAX_NAME_LENGTH];
    int age;
    char address[MAX_NAME_LENGTH];
};

void inputStudentInfo(struct Student *student, int index) {
    printf("Nhap ten cua sinh vien thu %d: ", index + 1);
    fgets(student->name, MAX_NAME_LENGTH, stdin);
    student->name[strcspn(student->name, "\n")] = '\0'; // Loai bo ky tu '\n'

    printf("Nhap tuoi cua sinh vien thu %d: ", index + 1);
    scanf("%d", &student->age);
    getchar(); // Loai bo ky tu '\n' trong buffer
	
    printf("Nhap dia chi cua sinh vien thu %d: ", index + 1);
    fgets(student->address, MAX_NAME_LENGTH, stdin);
    student->address[strcspn(student->address, "\n")] = '\0'; // Loai bo ky tu '\n'
}

void saveStudentsToFile(struct Student *students, int numStudents) {
    FILE *filePointer;
    filePointer = fopen("student_info.txt", "a"); // M? t?p vãn b?n ð? ghi (mode "a" ð? thêm vào cu?i file)

    if (filePointer == NULL) {
        printf("Khong the mo file de ghi.\n");
        exit(EXIT_FAILURE);
    }

    // Ghi thông tin sinh viên vào t?p
    for (int i = 0; i < numStudents; i++) {
        fprintf(filePointer, "Ten: %s, Tuoi: %d, Dia chi: %s\n", students[i].name, students[i].age, students[i].address);
    }

    fclose(filePointer); // Ðóng t?p sau khi ghi
}

void printLongestNameStudentFromFile(const char *filename) {
    FILE *filePointer;
    char buffer[MAX_NAME_LENGTH * 2]; // Ð?m b?o ð? dài tên l?n nh?t có th?
    char longestName[MAX_NAME_LENGTH];
    int maxNameLength = 0;

    filePointer = fopen(filename, "r"); // M? t?p vãn b?n ð? ð?c

    if (filePointer == NULL) {
        printf("Khong the mo file de doc.\n");
        exit(EXIT_FAILURE);
    }

    // T?m sinh viên có tên dài nh?t trong t?p
    while (fgets(buffer, sizeof(buffer), filePointer) != NULL) {
        char *nameStart = strstr(buffer, "Ten: "); // T?m d?ng ch?a thông tin tên sinh viên
        if (nameStart != NULL) {
            nameStart += strlen("Ten: ");
            char *nameEnd = strchr(nameStart, ','); // T?m d?u ',' k?t thúc c?a thông tin tên
            if (nameEnd != NULL) {
                int nameLength = nameEnd - nameStart;//lay do dai cua chuoi
                if (nameLength > maxNameLength) {	//check do dai chuoi nao lon hon
                    maxNameLength = nameLength;
                    strncpy(longestName, nameStart, nameLength);
                    longestName[nameLength] = '\0'; // Ð?m b?o k?t thúc chu?i
                }
            }
        }
    }

    fclose(filePointer); // Ðóng t?p sau khi ð?c

    // In thông tin c?a sinh viên có tên dài nh?t ra màn h?nh console
    if (maxNameLength > 0) {
        printf("Thong tin cua sinh vien co ten dai nhat (%d ky tu):\n", maxNameLength);
        printf("%s\n", longestName);
    } else {
        printf("Khong tim thay sinh vien nao trong file.\n");
    }
}

int main() {
    int numStudents;

    printf("Nhap so luong sinh vien: ");
    scanf("%d", &numStudents);
    getchar(); // Loai bo ky tu '\n' trong buffer

    if (numStudents <= 0 || numStudents > MAX_STUDENTS) {
        printf("So luong sinh vien khong hop le.\n");
        return 1;
    }

    struct Student students[MAX_STUDENTS];
	
    // Nhap thong tin cho cac sinh vien
    for (int i = 0; i < numStudents; i++) {
        inputStudentInfo(&students[i], i);
    }

    // Luu thong tin sinh vien vao file
    saveStudentsToFile(students, numStudents);

    printf("Da luu thong tin cua sinh vien vao file.\n");

    // In ra thong tin sinh vien co ten dai nhat tu file
    printLongestNameStudentFromFile("student_info.txt");

    return 0;
}

