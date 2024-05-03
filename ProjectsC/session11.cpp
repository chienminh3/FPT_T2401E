#include <stdio.h>
#include <malloc.h>
#include <string.h>

struct Student {
		char name[20];
		int age;
		char address[20];
		int numberPhone;
	};

int main() {	
	struct Student *ptr_Student;
	int rangeStd, i;
	printf("So sinh vien can nhap la: ");
	scanf("%d", &rangeStd);
	getchar();
	ptr_Student = (struct Student *) malloc(rangeStd*sizeof(struct Student));
	for (i = 0; i < rangeStd; i++) {
		printf("\n\nSinh vien %d", i+1);
		printf("\nNhap ten: ");
		gets((ptr_Student+i)->name);
		printf("Nhap tuoi: ");
		scanf("%d", &(ptr_Student+i)->age);
		getchar();
		printf("Nhap dia chi: ");
		gets((ptr_Student+i)->address);
		printf("Nhap SDT: ");
		scanf("%d", &(ptr_Student+i)->numberPhone);
		getchar();
	}
	
	int choose;
	do {
		printf("\n1. in ra sinh vien co tuoi lon nhat");
		printf("\n2. in ra sinh vien co ten dai nhat");
		printf("\n3. in ra sinh vien co tuoi lon hon 20");
		printf("\n4. tim kiem thong tin sinh vien theo tuoi");
		printf("\n5. Ket thuc");
		printf("\nChon 1-5: ");
		scanf("%d", &choose);
		printf("\n");
		
		switch(choose) {
			case 1:
				printf("\nSINH VIEN CO TUOI LON NHAT\n");
				int maxAge, flag;
				i = 0;
				flag = 0;
				maxAge = (ptr_Student+i)->age;
				for (i++; i < rangeStd; i++) {
					if (maxAge < (ptr_Student+i)->age) {
						maxAge = (ptr_Student+i)->age;
						flag = i;
					}
				}
				printf("Ten    : %s\n", (ptr_Student+flag)->name);
				printf("Tuoi   : %d\n", (ptr_Student+flag)->age);
				printf("Dia chi: %s\n", (ptr_Student+flag)->address);
				printf("SDT    : %d\n\n", (ptr_Student+flag)->numberPhone);
				break;
			case 2:
				printf("\nSINH VIEN CO TEN DAI NHAT\n");
				int maxName;
				i = 0; 
				flag = 0;
				maxName = strlen((ptr_Student+i)->name);
				for (i++; i < rangeStd; i++) {
					if (maxName < strlen((ptr_Student+i)->name)) {
						maxName = strlen((ptr_Student+i)->name);
						flag = i;
					}
				}
				printf("Ten    : %s\n", (ptr_Student+flag)->name);
				printf("Tuoi   : %d\n", (ptr_Student+flag)->age);
				printf("Dia chi: %s\n", (ptr_Student+flag)->address);
				printf("SDT    : %d\n\n", (ptr_Student+flag)->numberPhone);
				break;
			
			case 3: 
				printf("\nSINH VIEN CO TUOI (>20)\n");
				for (i = 0; i < rangeStd; i++) {
					if (((ptr_Student+i)->age) > 20) {
						printf("Ten    : %s\n", (ptr_Student+i)->name);
						printf("Tuoi   : %d\n", (ptr_Student+i)->age);
						printf("Dia chi: %s\n", (ptr_Student+i)->address);
						printf("SDT    : %d\n\n", (ptr_Student+i)->numberPhone);
					}
				}
			 	break;
			 	
			case 4:
				int searching;
				printf("\nNHAP TUOI SINH VIEN CAN TIM: ");
				scanf("%d", &searching);
				int check;
				for (i = 0; i < rangeStd; i++) {
					if (searching == (ptr_Student+i)->age) {
						check++;
						printf("Ten    : %s\n", (ptr_Student+i)->name);
						printf("Tuoi   : %d\n", (ptr_Student+i)->age);
						printf("Dia chi: %s\n", (ptr_Student+i)->address);
						printf("SDT    : %d\n\n", (ptr_Student+i)->numberPhone);
					} 
				}	
				if (check == 0) {
					printf("\nKhong co sinh vien %d\n", searching);
				}
				break;
				
			case 5:
				printf("\nKet thuc chuong trinh!");
				return 0;
			default:
				printf("\nVui long nhap lai 1-5!\n");
		}
	} while (true);
}
