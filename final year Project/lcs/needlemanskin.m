seqsample=fastaread('skincancer1303.fasta','ignoregaps',true)
seqtest=fastaread('testingdna.txt','ignoregaps',true)
[score,alignment]=nwalign(seqsample,seqtest,'scoringmatrix','blosum62','showscore','true');
disp(score);
disp(alignment);