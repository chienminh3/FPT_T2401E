#include <stdio.h>

int main() {
	//doc va in ra man hinh console chuoi trong file txt
	FILE *fp;//tao con tro de doc file
	char string[20];//tao mot mang de hung mang trong file
	fp = fopen("D:/ProjectsC/saveInforStudent.txt", "r");//mo file
	
	if (fp == NULL) {
		printf("khong the mo file!\n");
		return 1;
	}
	
	//doc file txt va in ra man hinh console
	while (fgets(string, sizeof(string), fp) != NULL) {
		printf("%s", string);
	}
	fclose(fp);//dong file txt
	printf("\n");
	
	
	//doc file va in ra man hinh console cac character
	fp = fopen("D:/ProjectsC/saveInforStudent.txt", "r");
	char character;
	
	while ((character = fgetc(fp)) != EOF) {
		printf("%c", character);
	}
	fclose(fp);
	
}
