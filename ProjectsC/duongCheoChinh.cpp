#include <stdio.h>

int main() {
	int lineAndCol, totalMainDiagonal, maxLine, maxCol, k;
	printf("enter line and col: ");
	scanf("%d", &lineAndCol);
	int Array[lineAndCol][lineAndCol];
	
	printf("\n");
	for (int i = 0; i < lineAndCol; i++) {
		for (int j = 0; j < lineAndCol; j++) {
			printf("line %d col %d: ", i, j);
			scanf("%d", &Array[i][j]);
		}
		printf("\n");
	}
	
	for (int i = 0; i < lineAndCol; i++) {
		for (int j = 0; j < lineAndCol; j++) {
			printf("%d ", Array[i][j]);
		}
		totalMainDiagonal = totalMainDiagonal + Array[i][i]; 
		printf("\n");
	}
	
	printf("\n1. Total main diagonal is: %d\n", totalMainDiagonal);
	printf("\n2.");
	
	for (int i = 0; i < lineAndCol; i++) {
		for (int j = 0; j < lineAndCol; j++) {
			if (j == 0) {
				maxLine = Array[i][j];
			}else {
				if (maxLine < Array[i][j]) {
					maxLine = Array[i][j];
				}
			}
		}
		printf("\tMax line %d = %d", i, maxLine);
		printf("\n");
	}
	
	printf("\t---------------\n");
	
	for (int j = 0; j < lineAndCol; j++) {
		for (int i = 0; i < lineAndCol; i++) {
			if (i == 0) {
				maxCol = Array[i][j];
			} else {
				if (maxCol < Array[i][j]) {
					maxCol = Array[i][j];
				}
			}
		}
		printf("\tMax col %d = %d\n", j, maxCol);
	}
	
	
//	int choise;
//	do{
//		printf("\n1. Select total main diagonal");
//		printf("\n2. Select max line and col");
//		printf("\n3. Exit");
//		
//		scanf("%d", &choise);
//		switch(choise) {
//			case 1:
//				printf("\nTotal main diagonal is: %d", temp);
//				break;
//			case 2:
//				
//				break;
//			case 3:
//				printf("\nGoodbye.");
//				return 0;
//			default:
//				printf("\nNot it!\n");
//				break;
//		}
//	} while (choise  < 1 || choise > 3);
}
