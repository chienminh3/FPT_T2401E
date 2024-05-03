#include <stdio.h>

//char *inputFile() {
//	char *input = (char *) malloc (BUFFER_SIZE * sizeof(char));
//	
//	if (input == NULL) {
//		printf("Khong du bo nho\n");
//		exit(EXIT_FAILURE);
//	}
//	
	//nhap thong tin sv
//	fgets(input, BUFFER_SIZE, stdin);
//	
//	//loai bo ky tu "\n" neu co
////  input[strcspn(input, "\n")] = '\0';
//
//	return input;
//}

int main() {
	
	FILE *filePointer;//khai bao con tro file
		
	//mo file moi mode "w+" (ghi va doc) 
	filePointer = fopen("D:/ProjectsC/testwrite.txt", "w+");
	
	//ghi du lieu vao tep tin
	fprintf(filePointer, "xin chao FPT Aptech");
	
	//dat con tro ve vi tri dau tien cua file
	rewind(filePointer);
	
	//khai bao 1 kieu arr de nhan chuoi trong file
	char displayDataInFile[100];
	
	//nhan chuoi trong file "fgets" va hien thi
	printf("\n");
	while (fgets(displayDataInFile, sizeof(displayDataInFile), filePointer) != NULL) {
		printf("%s", filePointer);
	}
	fclose(filePointer);
	
	return 0;
}
