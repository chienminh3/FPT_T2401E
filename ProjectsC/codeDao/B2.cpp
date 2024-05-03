#include <stdio.h>

int main() {
	float a, b, c;
	printf("enter mark HTML: ");
	scanf("%f", &a);
	printf("enter mark CSS: ");
	scanf("%f", &b);
	printf("enter mark JS: ");
	scanf("%f", &c);
	
	float avgMark = (a+b+c)/3;
	
	if (avgMark >= 0 && avgMark < 5) {
		printf("Weak");
	}else if (avgMark >= 5 && avgMark < 7) {
		printf("Trung binh");
	}else if (avgMark >= 7 && avgMark < 8) {
		printf("Kha");
	}else if (avgMark >= 8 && avgMark < 9) {
		printf("Gioi");
	}else {
		printf("Xuat sac");
	}
}
