#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <malloc.h>

#define MAX_NAME_LENGTH 50
#define MAX_STUDENTS 100

struct student {
	char name[MAX_NAME_LENGTH];
	int age;
	char address[MAX_NAME_LENGTH];
};

//input thong tin sinh vien
void inputStudentInfo(struct student *student, int index) {
	printf("\nNHAP THONG TIN SINH VIEN %d:\n", index+1);
	printf("TEN: ");
	fgets(student->name, MAX_NAME_LENGTH, stdin);
	student->name[strcspn(student->name, "\n")] = '\0';
	
	printf("TUOI: ");
	scanf("%d", &student->age);
	getchar();
	
	printf("DIA CHI: ");
	fgets(student->address, MAX_NAME_LENGTH, stdin);
}

//luu thong tin sinh vien vao file
void saveInforStudent(struct student *student, int numberStudent) {
	FILE *filePointer;
	filePointer = fopen("Session11.txt", "a");//mo file va ghi mode "a"
	
	//ghi thong tin sinh vien vao tep
	for (int i = 0; i < numberStudent; i++) {
		fprintf(filePointer, "Ten: %s, Tuoi: %d, Dia chi: %s", student[i].name, student[i].age, student[i].address);
	}
	fclose(filePointer);
}

//tim kiem sv co age lon nhat
void checkAgeStudentMax(const char *filename) {
	FILE *filePointer;
	char buffer[MAX_NAME_LENGTH * 2];
	char getAgeLength[MAX_NAME_LENGTH];
	int ageStudentMax = 0;
	
	filePointer = fopen(filename, "r");// mo file
	
	while (fgets(buffer, sizeof(buffer), filePointer) != NULL) {
		char *ageStart = strstr(buffer, "Tuoi: ");
		if (ageStart != NULL) {
			ageStart += strlen("Tuoi: ");
			char *ageEnd = strchr(ageStart, ',');
			if (ageEnd != NULL) {
				int ageLength = ageEnd - ageStart;
				strncpy(getAgeLength, ageStart, ageLength);
				int tmp = getAgeLength[ageLength];
				getAgeLength[ageLength] = '\0';
				if (tmp > ageStudentMax) {
					ageStudentMax = tmp;
				}
			}
		}
	}
	fclose(filePointer);//dong file
	printf("\nTuoi lon nhat la: %d", ageStudentMax);
	if (ageStudentMax > 0) {
		printf("\nTuoi lon nhat la: %d", ageStudentMax);
	} else {
		printf("\nKhong tim thay!\n");
	}
	
}


//tim kiem sv co name dai nhat
void checkLongestNameStudent(const char *fileName) {
	FILE *filePointer;
	char buffer[MAX_NAME_LENGTH * 2];
	char longestName[MAX_NAME_LENGTH];
	int maxNameLength = 0;
	
	filePointer = fopen(fileName, "r");//mo file
	
	//tim sinh vien co ten dai nhat trong file
	while (fgets(buffer, sizeof(buffer), filePointer) != NULL) {	
		char *nameStart = strstr(buffer, "Ten: ");	//tim dong chua ten sinh vien
		if (nameStart != NULL) {
			nameStart += strlen("Ten: ");
			char *nameEnd = strchr(nameStart, ',');	//tim ky tu ket thuc chuoi
			if (nameEnd != NULL) {					
				int nameLength = nameEnd - nameStart;	//lay do dai cua chuoi
				if (nameLength > maxNameLength) {	
					maxNameLength = nameLength;
					strncpy(longestName, nameStart, nameLength);	//copy chuoi dai nhat vao longestName voi do dai la nameLength
					longestName[nameLength] = '\0';		//dam bao ket thuc chuoi va khong chua ky tu nao sau chuoi longestName
				}
			}
			
		}		
	}
	fclose(filePointer);
	
	//hien thi thong tin sinh vien co ten dai nhat
	if (maxNameLength > 0) {
		printf("\nSinh vien co ten dai nhat la: %s", longestName);
		printf("\nGom: %d ky tu", maxNameLength);
	} else {
		printf("\nKhong tim thay!\n");
	}
	
	
}

//doc file va hien thi len man hinh console
void readfile() {
	FILE *filePointer;
	filePointer = fopen("Session11.txt", "r");//mo file
	
	if (filePointer == NULL) {
		printf("\nKhong the mo file!\n");
	}
	
	char buffer[MAX_STUDENTS];
	while (fgets(buffer, sizeof(buffer), filePointer) != NULL) {	//nhan thong tin sinh vien trong file va hien thi
		printf("%s", buffer);										
	}
	printf("\n");
	//dong file
	fclose(filePointer);
}


int main() {
	struct student *students = (struct student *) malloc(MAX_STUDENTS * sizeof(struct student));//su dung malloc mang cap phat dong
	int numberStudent;						
	
	int choose;
	do {
		printf("\n\n1. in ra sinh vien co tuoi lon nhat");
		printf("\n2. in ra sinh vien co ten dai nhat");
		printf("\n3. in ra sinh vien co tuoi lon hon '20'");
		printf("\n4. tim kiem thong tin sinh vien theo tuoi");
		printf("\n5. them sinh vien");
		printf("\n6. kiem tra file");
		printf("\n7. ket thuc chuong trinh!\n");
		printf("\nChon 1-5: ");
		scanf("%d", &choose);
		printf("\n");
		
		switch(choose) {
			case 1://hien thi sinh vien co ten dai nhat len man hinh console
				checkAgeStudentMax("Session11.txt");
				break;
				
			case 2:
				checkLongestNameStudent("Session11.txt");
				break;
			
			case 3: 
				
			 	break;
			 	
			case 4:
				
				break;
			
			case 5://nhap thong tin sinh vien
				printf("Nhap SV can them: ");
				scanf("%d", &numberStudent);
				getchar();
				
				if (numberStudent <= 0) {
					printf("\nKhong hop le, so sinh vien can them phai lon hon 1\n");
					break;
				}
				
				//so lan them sinh vien
				for (int i = 0; i < numberStudent; i++) {
					inputStudentInfo(&students[i], i);
				}
				
				saveInforStudent(students, numberStudent);	//luu thong tin sinh vien
				printf("\nDa luu thong tin sinh vien!\n");
				break;
			
			case 6://doc file va hien thi len man hinh console
				readfile();
				break;
			
			case 7:
				printf("\nKet thuc chuong trinh!\n");
				return 0;
				
			default:
				printf("\nVui long nhap lai 1-7!\n");
		}
	} while (true);
	
}
